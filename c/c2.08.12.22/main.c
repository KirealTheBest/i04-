#include <stdlib.h>
#include <stdio.h>
#include <time.h>

int main() {
for (i = 0; i < times; i++) {
    char var[255];
    sprintf(var, "RSS_FEED=%s", feeds[i]);
    char *vars[] = {var, NULL};
    pid_t pid = fork();
    if (pid == -1){
        fprintf(stderr, "Не могу клонировать процесс: %s\n", strerror(errno));
        return 1;
}
if (!pid) {
    if (execle("/usr/bin/python", "/usr/bin/python", "./rssgossip.hy", phrase, NULL, vars) == -1)
{
fprintf(stderr, "Не могу запустить скрипт: %s\n", strerror(errno));
return 1;
}
}
}
}