#include <stdio.h>

int main () {
    int x,y,d;
    double z;
    printf("Введите x: ");
    scanf("%d", &x);
    printf("Введите y: ");
    scanf("%d", &y);
    printf("Введите действие: ");
    printf("1 - сложение\n");
    printf("2 - вычитание\n");
    printf("3 - умножение\n");
    printf("4 - деление\n");
    scanf("%d", &d);

    if (d == 1) {
        z = x + y;
        printf("%d + %d = %f\n", x,y,z);
    }
    else if (d == 2) {
        z = x - y;
        printf("%d - %d = %f\n", x,y,z);
    }   
    else if (d == 3) {
        z = x * y;
        printf("%d * %d = %f\n", x,y,z);
    }   
    else if (d == 4) {
        if (y == 0) {
            printf("Деление на ноль!\n");
            return 0;
        }

        z = x / y;
        printf("%d / %d = %f\n", x,y,z);
    }
    else {
        printf ("Неверное значение\n");
    }
    return 0;
}