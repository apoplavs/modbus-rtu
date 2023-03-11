SHELL := /bin/bash

IMAGE_TAG = latest
IMAGE_NAME = apoplavs/modbus-rtu
FILE_VERSION = "./version"

ifeq ("$(wildcard $(FILE_VERSION))","")
	CURRENT_VERSION = $(shell cat $(FILE_VERSION) | head -n 1)
	MAJOR = $(shell echo $(CURRENT_VERSION) | cut -d. -f1)
	MINOR = $(shell echo $(CURRENT_VERSION) | cut -d. -f2)
	PATCH = $(shell echo $(CURRENT_VERSION) | cut -d. -f3)

	NEW_MINOR = $(shell echo $(MINOR)+1 | bc)
	NEW_PATCH = $(shell echo $(PATCH)+1 | bc)
	IMAGE_TAG = $(MAJOR).$(MINOR).$(PATCH)
else
    $(error File version not found)
endif

.PHONY: help
help:
	$(info build-patch)
	$(info build-minor)
	$(info build-major)
	$(info production)

.PHONY: build-patch
build-patch: next-tag-patch build

.PHONY: build-minor
build-minor: next-tag-minor build

.PHONY: build-major
build-major: next-tag-major build

.PHONY: production
production:
ifeq ("$(shell docker images $(IMAGE_NAME):$(IMAGE_TAG) | grep $(IMAGE_NAME))","")
	docker build --platform linux/arm64/v8 -t $(IMAGE_NAME):$(IMAGE_TAG) .
else
	$(info Image with current version already exists)
endif
	docker run -d --device=/dev/ttyUSB0 --restart always $(IMAGE_NAME):$(IMAGE_TAG)

.PHONY: next-tag-major
next-tag-major:
ifneq ($(IMAGE_TAG), $(DEFAULT_IMAGE_TAG))
	$(eval MAJOR := $(shell echo $(MAJOR) + 1 | bc))
	$(eval MINOR := 0)
	$(eval PATCH := 0)
	$(eval IMAGE_NEW_TAG := $(MAJOR).$(MINOR).$(PATCH))
	$(shell echo $(IMAGE_NEW_TAG) > $(FILE_VERSION))
	$(info New version is $(IMAGE_NEW_TAG))
endif

.PHONY: next-tag-minor
next-tag-minor:
ifneq ($(IMAGE_TAG), $(DEFAULT_IMAGE_TAG))
	$(eval MINOR := $(shell echo $(MINOR) + 1 | bc))
	$(eval PATCH := 0)
	$(eval IMAGE_NEW_TAG := $(MAJOR).$(MINOR).$(PATCH))
	$(shell echo $(IMAGE_NEW_TAG) > $(FILE_VERSION))
	$(info New version is $(IMAGE_NEW_TAG))
endif

.PHONY: next-tag-patch
next-tag-patch:
ifneq ($(IMAGE_TAG), $(DEFAULT_IMAGE_TAG))
	$(eval PATCH := $(shell echo $(PATCH) + 1 | bc))
	$(eval IMAGE_NEW_TAG := $(MAJOR).$(MINOR).$(PATCH))
	$(shell echo $(IMAGE_NEW_TAG) > $(FILE_VERSION))
	$(info New version is $(IMAGE_NEW_TAG))
endif

.PHONY: build
build:
ifeq ("$(shell docker images $(IMAGE_NAME):$(IMAGE_NEW_TAG) | grep $(IMAGE_NAME))","")
	docker build -t $(IMAGE_NAME):$(IMAGE_NEW_TAG) .
else
	$(error Image with current version already exists)
endif