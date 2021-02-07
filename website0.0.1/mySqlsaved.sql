create table users (
	id int(2) not null PRIMARY KEY AUTO_INCREMENT,
    username varchar(128) not null,
    pwd varchar(56) not null
);

insert into users (username, pwd) VALUES ('cjohn','genericpassword1');

$resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['username'] . "<br>";
                }
            }