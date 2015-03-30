#include<stdio.h>

int a[10],book[10],n;

void dfs(int step)   //step表示现在站在第几个盒子面前
{
   int i; 

   if (step == n+1) //如果站在第n个盒子面前，代表前面n个盒子已经放好
   {
       for(i=1;i<=n;i++)
       {
            printf("%d",a[i]);
       }

       printf("\n");
        
       return;
   }


   for(i=1;i<=n;i++)
   {
        
       if( book[i] == 0){
            
           a[step] = i;
           book[i] = 1;

           //第step个盒子已经放好
           dfs(step+1);

           book[i] = 0;
       }
   }

   return;
}

int main()
{
    n = 10;
    dfs(1);

    getchar();
    return 0;
}


