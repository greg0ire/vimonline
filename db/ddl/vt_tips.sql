create table vt_tips (
    tip_id integer auto_increment primary key,
    summary varchar(200),
    tip longtext,
    version enum('5.7','6.0'),
    complexity enum('basic','intermediate','advanced'),
    last_updated_by_email varchar(100),
    last_update_date timestamp,
    created_by varchar(40),
    created_by_email varchar(100),
    creation_date timestamp,
    ratings integer,
    rating_score integer,
    viewed integer,
    fulltext(summary,tip)
);
