#ifndef _ISLAND_H
#define _ISLAND_H

typedef struct island {
    char *name;
    char *opens;
    char *closes;
    struct island *next;
} island;

void display(island*);
island* create(char*);
void release(island *start);

#endif