CREATE TABLE posts(
    id int(255) auto_increment not null,
    title varchar(200) not null,
    subtitle varchar(200),
    slug varchar(100),
    status boolean,
    posted_by int(4),
    body text,
    image varchar(255),
    likes int(2),
    dislike int (2),
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_posts PRIMARY KEY (id) 
)ENGINE=InnoDb;

CREATE TABLE categories(
    id int(255) auto_increment not null,
    name varchar(150),
    slug varchar(255),
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_categories PRIMARY KEY (id) 
)ENGINE=InnoDb;

CREATE TABLE tags(
    id int(255) auto_increment not null,
    name varchar(150),
    slug varchar(255),
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_tags PRIMARY KEY (id) 
)ENGINE=InnoDb;

CREATE TABLE category_post(
    id int(255) auto_increment not null,
    category_id int(255) not null,
    post_id int(255) not null,
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_category_post PRIMARY KEY (id),
    CONSTRAINT fk_category_category FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE CASCADE,
    CONSTRAINT fk_category_post FOREIGN KEY (post_id) REFERENCES posts (id) ON DELETE CASCADE
)ENGINE=InnoDb;

CREATE TABLE tag_post(
    id int(255) auto_increment not null,
    post_id int(255) not null,
    tag_id int(255) not null,
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_tags_post PRIMARY KEY (id),
    CONSTRAINT fk_post_post FOREIGN KEY (post_id) REFERENCES posts (id) ON DELETE CASCADE,
    CONSTRAINT fk_tag_post FOREIGN KEY (tag_id) REFERENCES tags (id) ON DELETE CASCADE
)ENGINE=InnoDb;

CREATE TABLE admins(
    id int(255) auto_increment not null,
    name varchar(100),
    email varchar(255),
    phone varchar(20),
    status integer(4),
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_admin PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE roles(
    id int(255) auto_increment not null,
    name varchar(100),
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_role PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE admin_role(
    id int(255) auto_increment not null,
    admin_id int(255),
    role_id int(255),
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT pk_role PRIMARY KEY (id),
    CONSTRAINT fk_admin_role FOREIGN KEY (admin_id) REFERENCES admins (id) ON DELETE CASCADE,
    CONSTRAINT fk_role_role FOREIGN KEY (role_id) REFERENCES roles (id) ON DELETE CASCADE
)ENGINE=InnoDb;

