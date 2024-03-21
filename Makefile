CURRENT_DIR=$(shell pwd)/src

# np => number path
task:
	@for np in $(np); do \
		cd $(CURRENT_DIR)/$$np && php index.php; \
	done

all:
	make task np="1 2 3 4"