CREATE TABLE artist(
        artistID VARCHAR(100) PRIMARY KEY,
        artistName VARCHAR(30) NOT NULL,
        bandName VARCHAR(20) NOT NULL,
        bandMember VARCHAR(20) NOT NULL
        );

CREATE TABLE album(
        albumName VARCHAR(30) PRIMARY KEY,
        albumYear VARCHAR(20) NOT NULL,
        albumPhoto VARCHAR(60) NOT NULL,
        artistID VARCHAR(100) NOT NULL,
        styleName VARCHAR(30) NOT NULL
        );

CREATE TABLE music(
        musicName VARCHAR(30) PRIMARY KEY,
        musicLenght VARCHAR(20) NOT NULL,
        Lyrics VARCHAR(500) NOT NULL,
        albumName VARCHAR(30) NOT NULL,
        artistID VARCHAR(100) NOT NULL
        );

CREATE TABLE style(
        styleName VARCHAR(30) PRIMARY KEY,
        styleSensitivity VARCHAR(20) NOT NULL
        );
    
INSERT INTO artist (artistID,artistName,bandName,bandMember)
VALUES  ('1','Jason Mraz','Atlantic','1'),
        ('2','Edward Christopher','Atlantic','1'),
        ('3','Toni Watson','Elektra','1'),
        ('4','Montero Lamar Hill','Columbia','2');

INSERT INTO album (albumName,albumYear,albumPhoto,artistID,styleName)
VALUES  ('We Sing. We Dance. We Steal Things.','2005','https://images-na.ssl-images-amazon.com/images/I/611WlNYHmYL._AC_SL1500_.jpg','1','Pop music'),
        ('Divide','2017','https://lh3.googleusercontent.com/proxy/5hM9T5vE4dNhFpXDbezVlLKZbhcf7eGXMlB36GfnjZWibrDtr-MFSIAO7iEgqdzveZxLxNZk6xi-hZOrYvoR1AmI5fbjGcIySvMeRh18X6hu6Rr9gFzhLwL-WUzQ5R7EPLvXcpd_Z4Kxdd0','2','Pop music'),
        ('Multiply','2014','https://i.pinimg.com/originals/c5/34/a4/c534a4dc288c51e8365d5050fc3f81a2.jpg','2','Folk music'),
        ('Tones and I','2019','https://i.pinimg.com/736x/58/23/d7/5823d72ef2cbf5db515545ba9d4a9f01.jpg','3','Pop music'),
        ('Seven EP','2018','https://consequenceofsound.net/wp-content/uploads/2019/06/Lil-Nas-X-7-EP-artwork.jpg?quality=80','4','Hiphop music');

INSERT INTO music (musicName,musicLenght,Lyrics,albumName,artistID)
VALUES  ('Im Yours','4:03','https://www.google.com/search?q=i%27m+yours+lyrics&oq=I%27m+Yours&aqs=chrome.2.0i355i433i457j46i433j0l4j0i395j69i61.1527j1j7&sourceid=chrome&ie=UTF-8','We Sing. We Dance. We Steal Things.','1'),
        ('Shape of You','3:53','https://www.google.com/search?ei=ZOL_X4C2A4qg0gTXnoKACQ&q=shape+of+you+lyrics&oq=Shape+of+You+lyrics&gs_lcp=CgZwc3ktYWIQARgAMgQIABBDMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeUJaYAViWmAFg458BaABwAXgAgAFviAFvkgEDMC4xmAEAoAECoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab','Divide','2'),
        ('Im a Mess','4:04','https://www.google.com/search?ei=l-L_X4vPCamvmAXdjajYDg&q=i%27m+a+mess+lyrics+ed+sheeran&oq=I%27m+a+Mess+lyrics+&gs_lcp=CgZwc3ktYWIQARgAMgcIABDJAxBDMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAOgQIABBHUN2gAVjdoAFg9KQBaABwAngAgAFoiAFokgEDMC4xmAEAoAEBqgEHZ3dzLXdpesgBCMABAQ&sclient=psy-ab','Multiply','2'),
        ('Dance Monkey','3:29','https://www.google.com/search?ei=ZOL_X4C2A4qg0gTXnoKACQ&q=dance+monkey+lyrics&oq=dan+lyrics&gs_lcp=CgZwc3ktYWIQARgAMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB46CAgAELEDEJECOgUIABCRAjoECAAQQzoICAAQBxAKEB5Qu8YFWJDRBWDI2gVoAHABeACAAYUBiAHUBJIBAzAuNZgBAKABAaoBB2d3cy13aXrAAQE&sclient=psy-ab','Tones and I','3'),
        ('Old Town Road','2.38','https://www.google.com/search?ei=zeL_X7nUAoaFr7wPxfGAwAs&q=old+town+road+lyrics&oq=old+lyrics&gs_lcp=CgZwc3ktYWIQARgAMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgYIABAHEB46BAgAEENQuUlYy0tg_1NoAHABeACAAXmIAdoCkgEDMC4zmAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab','Seven EP','4');

INSERT INTO style (styleName,styleSensitivity)
VALUES  ('Pop music','normal'),
        ('Folk music','normal'),
        ('Hiphop music','normal');