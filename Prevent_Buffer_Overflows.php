#define BUFF_SIZE 10  
  
void creed(char *usr, char *password)  
{  
      ..  
      if (strlen(password)<BUFF_SIZE)  
      {  
            strcpy(username, usr);   
            strcpy(pass, password);   
      }  
      else  
      {  
            printf ("\n This Password Isn't supported \n");  
            exit(1);  
      }  
      ...  
}  
int main(int argc, char* argv[])  
{  
      ..  
      creed(argv[1],argv[2]);  
      return 0;  
}  