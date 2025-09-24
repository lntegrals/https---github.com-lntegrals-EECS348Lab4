#include <stdio.h>
#include "isOdd.h"

int main() {
    int num;
    printf("Enter an integer: ");
    scanf("%d", &num);
    isOdd(num);   // prints from inside the function
    return 0;
}

#include <stdio.h>
#include "isOdd.h"

