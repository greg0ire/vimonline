create table vo_news_items (
    news_item_id integer auto_increment primary key,
    title varchar(80),
    news mediumtext,
    created_by integer,
    creation_date timestamp
);

