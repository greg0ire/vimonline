create table vs_sessions (
    session_id varchar(32) primary key,
    user_id integer,
    remote_address varchar(200),
    creation_date timestamp
);

