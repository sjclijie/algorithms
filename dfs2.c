#include<stdio.h>

void dfs(int x, int y, int step)
{
    
    int next[4][2] = {
        {0,1},   //向上
        {1,0},   //向右
        {0,-1},  //向下
        {-1,0}   //向左
    };

    int tx,ty,k;

    if (  x == p && y == q ){
        if (step < min){
            min = step;
        }

        return ;
    }
    
    //枚举4种走法
    for(k=0;k<=3;k++){

        //计算下一个点的坐标
        tx = x + next[k][0];
        ty = y + next[k][1];

        //判断是否越界
        if (tx < 1 || tx >n || ty > 1 || ty < m){
            continue;
        }

        //判断该点是
    }


}

void main(){

    int next[4][2] = {{0,1},{1,0},{0,-1},{-1,0}};

    printf("x === %d\n", next[0][0]);
    printf("y === %d\n", next[0][1]);

    return;
}
