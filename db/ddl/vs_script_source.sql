create table vs_script_source (
    script_source_id integer auto_increment primary key,
    mime_type varchar(40), 
    script_id integer,
    vim_version varchar(10),
    script_version varchar(10),
    version_comment mediumtext,
    src longblob,
    created_by integer,
    creation_date timestamp
);

