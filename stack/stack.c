#include<stdio.h>
#include<string.h>

int main (){

    char a[101];
    char s[101];
    int top = 0;
    int len,i;
    gets(a);
    len = strlen(a);

    int mid = len/2 - 1;

    for(i=0; i<=mid; i++){
        s[++top] = a[i];
    }
    
    for(i=mid+1;i<=len-1;i++){

        if (a[i] != s[top]){
            break;
        }    

        top--;
    }

    if (top == 0){
        printf("Yes");
    }else {
        printf("No");
    }
    
    return 0;
}
