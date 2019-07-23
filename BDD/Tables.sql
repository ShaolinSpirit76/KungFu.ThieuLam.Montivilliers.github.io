#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: KFTM_USERS
#------------------------------------------------------------

CREATE TABLE KFTM_USERS(
        ID            Int  Auto_increment  NOT NULL ,
        lastName      Varchar (50) NOT NULL ,
        firstName     Varchar (50) NOT NULL ,
        birthDate     Date ,
        phoneNumber   Varchar (50) ,
        mail          Varchar (50) NOT NULL ,
        picture       Blob ,
        login         Varchar (50) NOT NULL ,
        password      Varchar (50) NOT NULL ,
        verification  TinyINT NOT NULL ,
        status        Varchar (50) ,
        studentCourse Varchar (50) ,
        studentYear   Varchar (50) ,
        childBelt     Varchar (50) ,
        studentBelt   Varchar (50) ,
        teacherCourse Varchar (50) ,
        teacherRank   Varchar (50) ,
        groupAge      Varchar (50) ,
        presentation  Text
	,CONSTRAINT KFTM_USERS_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: KFTM_ROLE
#------------------------------------------------------------

CREATE TABLE KFTM_ROLE(
        ID            Int  Auto_increment  NOT NULL ,
        role          Varchar (50) NOT NULL ,
        ID_KFTM_USERS Int NOT NULL
	,CONSTRAINT KFTM_ROLE_PK PRIMARY KEY (ID)

	,CONSTRAINT KFTM_ROLE_KFTM_USERS_FK FOREIGN KEY (ID_KFTM_USERS) REFERENCES KFTM_USERS(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: KFTM_EVENTS
#------------------------------------------------------------

CREATE TABLE KFTM_EVENTS(
        ID               Int  Auto_increment  NOT NULL ,
        eventType        Varchar (50) NOT NULL ,
        eventDate        Datetime NOT NULL ,
        eventMaxUser     Int ,
        eventDescription Varchar (255) NOT NULL ,
        eventPicture     Blob
	,CONSTRAINT KFTM_EVENTS_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: KFTM_COURSES
#------------------------------------------------------------

CREATE TABLE KFTM_COURSES(
        ID             Int  Auto_increment  NOT NULL ,
        courseType     Varchar (50) NOT NULL ,
        courseHours    Varchar (50) NOT NULL ,
        courseDay      Varchar (50) NOT NULL ,
        ID_KFTM_EVENTS Int NOT NULL
	,CONSTRAINT KFTM_COURSES_PK PRIMARY KEY (ID)

	,CONSTRAINT KFTM_COURSES_KFTM_EVENTS_FK FOREIGN KEY (ID_KFTM_EVENTS) REFERENCES KFTM_EVENTS(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: KFTM_ARTICLES
#------------------------------------------------------------

CREATE TABLE KFTM_ARTICLES(
        id                 Int  Auto_increment  NOT NULL ,
        articleName        Varchar (50) NOT NULL ,
        articlePicture     Blob NOT NULL ,
        articleQuantity    Int NOT NULL ,
        articleDescription Varchar (255) NOT NULL ,
        articlePrice       Int NOT NULL
	,CONSTRAINT KFTM_ARTICLES_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: KFTM_SHOPCART
#------------------------------------------------------------

CREATE TABLE KFTM_SHOPCART(
        ID               Int  Auto_increment  NOT NULL ,
        id_KFTM_ARTICLES Int NOT NULL
	,CONSTRAINT KFTM_SHOPCART_PK PRIMARY KEY (ID)

	,CONSTRAINT KFTM_SHOPCART_KFTM_ARTICLES_FK FOREIGN KEY (id_KFTM_ARTICLES) REFERENCES KFTM_ARTICLES(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participating
#------------------------------------------------------------

CREATE TABLE Participating(
        ID            Int NOT NULL ,
        ID_KFTM_USERS Int NOT NULL
	,CONSTRAINT Participating_PK PRIMARY KEY (ID,ID_KFTM_USERS)

	,CONSTRAINT Participating_KFTM_EVENTS_FK FOREIGN KEY (ID) REFERENCES KFTM_EVENTS(ID)
	,CONSTRAINT Participating_KFTM_USERS0_FK FOREIGN KEY (ID_KFTM_USERS) REFERENCES KFTM_USERS(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Checking
#------------------------------------------------------------

CREATE TABLE Checking(
        ID            Int NOT NULL ,
        ID_KFTM_USERS Int NOT NULL
	,CONSTRAINT Checking_PK PRIMARY KEY (ID,ID_KFTM_USERS)

	,CONSTRAINT Checking_KFTM_COURSES_FK FOREIGN KEY (ID) REFERENCES KFTM_COURSES(ID)
	,CONSTRAINT Checking_KFTM_USERS0_FK FOREIGN KEY (ID_KFTM_USERS) REFERENCES KFTM_USERS(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Booking
#------------------------------------------------------------

CREATE TABLE Booking(
        ID            Int NOT NULL ,
        ID_KFTM_USERS Int NOT NULL
	,CONSTRAINT Booking_PK PRIMARY KEY (ID,ID_KFTM_USERS)

	,CONSTRAINT Booking_KFTM_SHOPCART_FK FOREIGN KEY (ID) REFERENCES KFTM_SHOPCART(ID)
	,CONSTRAINT Booking_KFTM_USERS0_FK FOREIGN KEY (ID_KFTM_USERS) REFERENCES KFTM_USERS(ID)
)ENGINE=InnoDB;

