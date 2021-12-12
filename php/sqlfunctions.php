<?php

function dataselect(){

}

function datadelete(){

}

function dataupdate(){

}

/*
create table content_table
(
content_id MEDIUMINT NOT NULL AUTO_INCREMENT,
content_category_id MEDIUMINT not null,
content_date datetime,
content_title varchar(50) not null,
content LONGTEXT not null,
content_author varchar(20),
content_image text,
PRIMARY KEY(content_id)
);
*/




function test(){
    $timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone;
}
?>