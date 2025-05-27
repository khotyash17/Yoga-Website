# Title 
### Yoga Website Hosting on AWS Single Architecture

# Steps To lounch AWS EC2 Instances

1.First Launch a Instance in AWS EC2. with AMI Amazon linux.

2.Befor Login the server using ssh cp yoga website zip folder to server using scp command (eg: scp -i -key-pair-of-your-server zip-folder-path-from-laptop ec2-user@public-ip-of-your-server:.).

3.Login to server using ssh command in powershell.

4.Download the software on server (nginx (Web Server), php, php-fpm8.3( For .php execution), mariadb105-server(For Database) (eg: sudo yum install software-name -y)


5.Then Start software which is installed using command (sudo service start nginx php-fpm mariadb)

6.Then Unzip the folder (eg: unzip folder-name).

7.Move the folder to html folder (Path is /usr/share/nginx/html) (eg: mv folder-name /usr/share/nginx/html).

8.Verify it copy your publicIP and paste it on browser (your publicip/index.php) (Website is working).

9.Now attach Database to record data.

## Creating Database Using AWS RDS

10.Create database go AWS Console serach RDS create database (give name, Set DB name as root, set password for DB, Attach to EC2 which is in use).

11.Copy the endpoint of your created database.

12.Open linux powershell create database command to open database ( eg: sudo mysql -u -p root -h  paste-created-database-endpoint-here ) enter password 

13.Succefully login to database:

14.Create Database (eg: create database dbconnect; )

- use dbconnect;

- create table in dbconnect (

table1: create table users(id int primary key auto_increment, username varchar(100), email varchar(100), number int, gender varchar(100));

table2: create table contact(id int primary key auto_increment, username varchar(100), email varchar(100), number int, message varchar(100));
)

15.Then verify it using desc users; and desc contact;

16.Then exit from database using exit command.

17.Then open file dbconnect using sudo nano dbconnect ( edit here in server block paste your DB endpoint, usersname is same root, password enter your database password, and keep other as it is).

18.Then restart all services ( sudo service nginx restart php php-fpm mariadb)

Your Website is ready to use and also can record users data in databses.
