create table vs_scripts (
    script_id integer auto_increment primary key,
    script_name varchar(40),
    script_type varchar(40),
    summary varchar(80),
    description longtext,
    install_details mediumtext,
    ratings integer,
    rating_score integer,
    downloads integer,
    last_updated_by integer,
    last_update_date timestamp,
    created_by integer,
    creation_date timestamp,
    fulltext(summary,description,install_details)
);

