#include <stdio.h>
#include "fish.h"

int main() {
    struct fish snappy = {"Зубастик", "Пиранья", 69,4, {{"Мясо", 0.2}, {"купаться в джакузи", 7.5}}};
    label(snappy);
    return 0;
}