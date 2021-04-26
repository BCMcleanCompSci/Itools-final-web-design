DROP DATABASE IF EXISTS BCMdb;
CREATE DATABASE BCMdb;
USE BCMdb;

-- -----------------------------------------------------
-- Table `BCMdb`.`Courses`
-- -----------------------------------------------------

CREATE TABLE courses(
  courseID INT NOT NULL,
  courseName VARCHAR(45) NOT NULL,
  courseInfo VARCHAR(250) NOT NULL,
  PRIMARY KEY (courseID)
);




-- -----------------------------------------------------
-- Table `BCMdb`.`Tutors`
-- -----------------------------------------------------


CREATE TABLE tutors (
  tutorID INT NOT NULL,
  tutorFirstName VARCHAR(45) NOT NULL,
  tutorLastName VARCHAR(45) NOT NULL,
  PRIMARY KEY (tutorID)
);



-- -----------------------------------------------------
-- Table `BCMdb`.`Roster`
-- -----------------------------------------------------


CREATE TABLE roster (
  rosterCode INT NOT NULL,
  courseID INT NOT NULL,
  tutorID INT NOT NULL,
  
  PRIMARY KEY (rosterCode),
  CONSTRAINT `fk_Roster_Courses`
    FOREIGN KEY (courseID)
    REFERENCES courses (courseID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Roster_Tutors1`
    FOREIGN KEY (tutorID)
    REFERENCES tutors (tutorID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



-- -----------------------------------------------------
-- Table `BCMdb`.`Students`
-- -----------------------------------------------------


CREATE TABLE students (
  studentID INT NOT NULL AUTO_INCREMENT,
  firstName VARCHAR(45) NOT NULL,
  lastName VARCHAR(45) NOT NULL,
  passW VARCHAR(45) NOT NULL,
  phoneNumber VARCHAR(15) NOT NULL,
  PRIMARY KEY (studentID)
);



-- -----------------------------------------------------
-- Table `BCMdb`.`Registry`
-- -----------------------------------------------------

CREATE TABLE registry (
  rosterCode INT NOT NULL AUTO_INCREMENT,
  studentID INT NOT NULL,
  courseID INT NOT NULL,
  dateRegistered date NOT NULL,
  PRIMARY KEY (rosterCode),
  CONSTRAINT `fk_Registry_Students1`
    FOREIGN KEY (studentID)
    REFERENCES students (studentID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Registry_Roster1`
    FOREIGN KEY (courseID)
    REFERENCES courses (courseID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);




INSERT INTO `courses`(`courseID`, `courseName`, `courseInfo`) 
  VALUES (1001,'Calculus 1','Absolute values and inequalities. Sequences and their limits.Introduction to series. Limits of functions and continuity. The Intermediate Value theorem and approximate solutions to equations.   Derivatives, linear approximation, and Newton''s method. The Mean Value theorem and error bounds. Applications of the Mean Value theorem, Taylor polynomials and Taylor''s 
  theorem, Big-O notation. Suitable topics are illustrated using computer software.');

INSERT INTO `courses`(`courseID`, `courseName`, `courseInfo`) 
  VALUES (1002,'Calculus 2','Introduction to the Riemann integral and approximations. Antiderivatives and the fundamental theorem of calculus. Change of variables, methods of integration. Applications of the integral. Improper integrals. Linear and separable differential equations and applications. Tests for convergence for series. Binomial series, functions defined as power series and Taylor series. Vector (parametric) curves in R2. Suitable topics are illustrated using computer software');

INSERT INTO `courses`(`courseID`, `courseName`, `courseInfo`) 
  VALUES (1003,'Algebra 1','An introduction to the language of mathematics and proof techniques through a study of the basic algebraic systems of mathematics: the integers, the integers modulo n, the rational numbers, the real numbers, the complex numbers and polynomials');

INSERT INTO `courses`(`courseID`, `courseName`, `courseInfo`) 
  VALUES (1004,' Linear Algebra 1','Systems of linear equations, matrix algebra, elementary matrices, computational issues. Real n-space, vector spaces and subspaces, basis and dimension, rank of a matrix, linear transformations, and matrix representations. Determinants, eigenvalues and diagonalization, applications. ');

INSERT INTO `courses`(`courseID`, `courseName`, `courseInfo`) 
  VALUES (1005,' Statistics 1','An introduction to statistical methods, descriptive statistics, the normal distribution, basic techniques of statistical inference, confidence intervals and hypothesis tests for population means and proportions, simple linear regression; and one-way analysis of variance.');




INSERT INTO tutors(tutorID,tutorFirstName,tutorLastName)
  VALUES (101, 'Bill', 'Grady');

INSERT INTO tutors(tutorID,tutorFirstName,tutorLastName)
  VALUES (102, 'Terry', 'Sykes');

INSERT INTO tutors(tutorID,tutorFirstName,tutorLastName)
  VALUES (103, 'Jill', 'Gates');

INSERT INTO tutors(tutorID,tutorFirstName,tutorLastName)
  VALUES (104, 'Clara', 'Vandelay');

INSERT INTO tutors(tutorID,tutorFirstName,tutorLastName)
  VALUES (105, 'Jared', 'Wisowski');





INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1011001,1001,101);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1011002,1002,101);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1021001,1001,102);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1021002,1002,102);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1031003,1003,103);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1031004,1004,103);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1041003,1003,104);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1041004,1004,104);

INSERT INTO roster(rosterCode,courseID,tutorID)
  VALUES (1051005,1005,105);





