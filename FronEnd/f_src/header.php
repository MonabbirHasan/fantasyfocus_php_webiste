<?php
include(".././BackEnd/src/config.php");
global $conn;
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="fantasy focus is a movie webiste like hindi movie, english movie chinish movie, sci-fi movie, action movie and motch more,"/>
    <meta name="description" content="
    (1,'Avatar','Fox',2788.00,760.50,0.27,2027.50,0.73,2009);
    (2,'Titanic','Par.',2186.80,658.70,0.30,1528.10,0.70,1997);
    (3,'Marvel''s The Avengers','BV',1518.60,623.40,0.41,895.20,0.59,2012);
    (4,'Harry Potter and the Deathly Hallows Part 2','WB',1341.50,381.00,0.28,960.50,0.72,2011);
    (5,'Furious 7','Uni.',1322.20,321.20,0.24,1001.00,0.76,2015);
    (6,'Frozen','BV',1274.20,400.70,0.31,873.50,0.69,2013);
    (7,'Iron Man 3','BV',1215.40,409.00,0.34,806.40,0.66,2013);
    (8,'Transformers: Dark of the Moon','P/DW',1123.80,352.40,0.31,771.40,0.69,2011);
    (9,'The Lord of the Rings: The Return of the King','NL',1119.90,377.80,0.34,742.10,0.66,2003);
    (10,'Skyfall','Sony',1108.60,304.40,0.28,804.20,0.73,2012);
    (11,'Transformers: Age of Extinction','Par.',1091.40,245.40,0.23,846.00,0.78,2014);
    (12,'The Dark Knight Rises','WB',1084.40,448.10,0.41,636.30,0.59,2012);
    (13,'Pirates of the Caribbean: Dead Man''s Chest','BV',1066.20,423.30,0.40,642.90,0.60,2006);
    (14,'Toy Story 3','BV',1063.20,415.00,0.39,648.20,0.61,2010);
    (15,'Pirates of the Caribbean: On Stranger Tides','BV',1045.70,241.10,0.23,804.60,0.77,2011);
    (16,'Jurassic Park','Uni.',1029.20,402.50,0.39,626.70,0.61,1993);
    (17,'Star Wars: Episode I - The Phantom Menace','Fox',1027.00,474.50,0.46,552.50,0.54,1999);
    (18,'Alice in Wonderland (2010)','BV',1025.50,334.20,0.33,691.30,0.67,2010);
    (19,'The Hobbit: An Unexpected Journey','WB',1017.00,303.00,0.30,714.00,0.70,2012);
    (20,'The Dark Knight','WB',1004.60,534.90,0.53,469.70,0.47,2008);
    (21,'The Lion King','BV',987.50,422.80,0.43,564.70,0.57,1994);
    (22,'Harry Potter and the Sorcerer''s Stone','WB',974.80,317.60,0.33,657.20,0.67,2001);
    (23,'Despicable Me 2','Uni.',970.80,368.10,0.38,602.70,0.62,2013);
    (24,'Pirates of the Caribbean: At World''s End','BV',963.40,309.40,0.32,654.00,0.68,2007);
    (25,'The Hobbit: The Desolation of Smaug','WB',960.40,258.40,0.27,702.00,0.73,2013);
    (26,'Harry Potter and the Deathly Hallows Part 1','WB',960.30,296.00,0.31,664.30,0.69,2010);
    (27,'The Hobbit: The Battle of the Five Armies','WB',955.10,255.10,0.27,700.00,0.73,2014);
    (28,'Harry Potter and the Order of the Phoenix','WB',939.90,292.00,0.31,647.90,0.69,2007);
    (29,'Finding Nemo','BV',936.70,380.80,0.41,555.90,0.59,2003);
    (30,'Harry Potter and the Half-Blood Prince','WB',934.40,302.00,0.32,632.50,0.68,2009);
    (31,'The Lord of the Rings: The Two Towers','NL',926.00,342.60,0.37,583.50,0.63,2002);
    (32,'Shrek 2','DW',919.80,441.20,0.48,478.60,0.52,2004);
    (33,'Harry Potter and the Goblet of Fire','WB',896.90,290.00,0.32,606.90,0.68,2005);
    (34,'Spider-Man 3','Sony',890.90,336.50,0.38,554.30,0.62,2007);
    (35,'Ice Age: Dawn of the Dinosaurs','Fox',886.70,196.60,0.22,690.10,0.78,2009);
    (36,'Harry Potter and the Chamber of Secrets','WB',879.00,262.00,0.30,617.00,0.70,2002);
    (37,'Ice Age: Continental Drift','Fox',877.20,161.30,0.18,715.90,0.82,2012);
    (38,'The Lord of the Rings: The Fellowship of the Ring','NL',871.50,315.50,0.36,556.00,0.64,2001);
    (39,'The Hunger Games: Catching Fire','LGF',864.90,424.70,0.49,440.20,0.51,2013);
    (40,'Star Wars: Episode III - Revenge of the Sith','Fox',848.80,380.30,0.45,468.50,0.55,2005);
    (41,'Transformers: Revenge of the Fallen','P/DW',836.30,402.10,0.48,434.20,0.52,2009);
    (42,'The Twilight Saga: Breaking Dawn Part 2','LG/S',829.70,292.30,0.35,537.40,0.65,2012);
    (43,'Inception','WB',825.50,292.60,0.35,533.00,0.65,2010);
    (44,'Spider-Man','Sony',821.70,403.70,0.49,418.00,0.51,2002);
    (45,'Independence Day','Fox',817.40,306.20,0.38,511.20,0.63,1996);
    (46,'Shrek the Third','P/DW',799.00,322.70,0.40,476.20,0.60,2007);
    (47,'Harry Potter and the Prisoner of Azkaban','WB',796.70,249.50,0.31,547.10,0.69,2004);
    (48,'E.T.: The Extra-Terrestrial','Uni.',792.90,435.10,0.55,357.80,0.45,1982);
    (49,'Fast & Furious 6','Uni.',788.70,238.70,0.30,550.00,0.70,2013);
    (50,'Indiana Jones and the Kingdom of the Crystal Skull','Par.',786.60,317.10,0.40,469.50,0.60,2008);
    (51,'Spider-Man 2','Sony',783.80,373.60,0.48,410.20,0.52,2004);
    (52,'Star Wars','Fox',775.40,461.00,0.60,314.40,0.41,1977);
    (53,'Guardians of the Galaxy','BV',774.20,333.20,0.43,441.00,0.57,2014);
    (54,'2012','Sony',769.70,166.10,0.22,603.60,0.78,2009);
    (55,'Maleficent','BV',758.40,241.40,0.32,517.00,0.68,2014);
    (56,'The Da Vinci Code','Sony',758.20,217.50,0.29,540.70,0.71,2006);
    (57,'The Amazing Spider-Man','Sony',757.90,262.00,0.35,495.90,0.65,2012);
    (58,'Shrek Forever After','P/DW',752.60,238.70,0.32,513.90,0.68,2010);
    (59,'The Hunger Games: Mockingjay - Part 1','LGF',752.10,337.10,0.45,415.00,0.55,2014);
    (60,'X-Men: Days of Future Past','Fox',748.10,233.90,0.31,514.20,0.69,2014);
    (61,'Madagascar 3: Europe''s Most Wanted','P/DW',746.90,216.40,0.29,530.50,0.71,2012);
    (62,'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe','BV',745.00,291.70,0.39,453.30,0.61,2005);
    (63,'Monsters University','BV',743.60,268.50,0.36,475.10,0.64,2013);
    (64,'The Matrix Reloaded','WB',742.10,281.60,0.38,460.60,0.62,2003);
    (65,'Up','BV',731.30,293.00,0.40,438.30,0.60,2009);
    (66,'Gravity','WB',716.40,274.10,0.38,442.30,0.62,2013);
    (67,'Captain America: The Winter Soldier','BV',714.80,259.80,0.36,455.00,0.64,2014);
    (68,'The Twilight Saga: Breaking Dawn Part 1','Sum.',712.20,281.30,0.40,430.90,0.61,2011);
    (69,'The Twilight Saga: New Moon','Sum.',709.80,296.60,0.42,413.20,0.58,2009);
    (70,'Transformers','P/DW',709.70,319.20,0.45,390.50,0.55,2007);
    (71,'The Amazing Spider-Man 2','Sony',709.00,202.90,0.29,506.10,0.71,2014);
    (72,'Dawn of the Planet of the Apes','Fox',708.80,208.50,0.29,500.30,0.71,2014);
    (73,'The Twilight Saga: Eclipse','Sum.',698.50,300.50,0.43,398.00,0.57,2010);
    (74,'Mission: Impossible - Ghost Protocol','Par.',694.70,209.40,0.30,485.30,0.70,2011);
    (75,'The Hunger Games','LGF',691.20,408.00,0.59,283.20,0.41,2012);
    (76,'Forrest Gump','Par.',677.90,330.30,0.49,347.70,0.51,1994);
    (77,'The Sixth Sense','BV',672.80,293.50,0.44,379.30,0.56,1999);
    (78,'Interstellar','Par.',672.70,188.00,0.28,484.70,0.72,2014);
    (79,'Man of Steel','WB',668.00,291.00,0.44,377.00,0.56,2013);
    (80,'Kung Fu Panda 2','P/DW',665.70,165.20,0.25,500.40,0.75,2011);
    (81,'Ice Age: The Meltdown','Fox',660.90,195.30,0.30,465.60,0.70,2006);
    (82,'Pirates of the Caribbean: The Curse of the Black Pearl','BV',654.30,305.40,0.47,348.90,0.53,2003);
    (83,'Big Hero 6','BV',652.00,222.40,0.34,429.60,0.66,2014);
    (84,'Star Wars: Episode II - Attack of the Clones','Fox',649.40,310.70,0.48,338.70,0.52,2002);
    (85,'Thor: The Dark World','BV',644.80,206.40,0.32,438.40,0.68,2013);
    (86,'Kung Fu Panda','P/DW',631.70,215.40,0.34,416.30,0.66,2008);
    (87,'The Incredibles','BV',631.40,261.40,0.41,370.00,0.59,2004);
    (88,'Fast Five','Uni.',626.10,209.80,0.34,416.30,0.67,2011);
    (89,'Hancock','Sony',624.40,227.90,0.37,396.40,0.64,2008);
    (90,'MIB 3','Sony',624.00,179.00,0.29,445.00,0.71,2012);
    (91,'Iron Man 2','Par.',623.90,312.40,0.50,311.50,0.50,2010);
    (92,'Ratatouille','BV',623.70,206.40,0.33,417.30,0.67,2007);
    (93,'How to Train Your Dragon 2','Fox',618.90,177.00,0.29,441.90,0.71,2014);
    (94,'The Lost World: Jurassic Park','Uni.',618.60,229.10,0.37,389.60,0.63,1997);
    (95,'The Passion of the Christ','NM',611.90,370.80,0.61,241.10,0.39,2004);
    (96,'Mamma Mia!','Uni.',609.80,144.10,0.24,465.70,0.76,2008);
    (97,'Life of Pi','Fox',609.00,125.00,0.21,484.00,0.80,2012);
    (98,'Madagascar: Escape 2 Africa','P/DW',603.90,180.00,0.30,423.90,0.70,2008);
    (99,'Casino Royale','Sony',599.00,167.40,0.28,431.60,0.72,2006)
    "/>
    <meta name="description" content="The Shawshank Redemption (1994) R | 142 min | Drama. ...
    The Godfather (1972) R | 175 min | Crime, Drama. ...
    The Dark Knight (2008) ...
    The Lord of the Rings: The Return of the King (2003) ...
    Schindler's List (1993) ...
    The Godfather Part II (1974) ...
    12 Angry Men (1957) ...
    Pulp Fiction (1994)
    100 best movies of all time
    10 best movies of all time
    100 best movies of all time wikipedia
    greatest movies of all time
    top 25 movies of all time
    top 50 movies of all time
    best movies of all time in the world
    imdb top 100 movies of all time
    ">
    <meta name="robots" content="fantasy focus is a movie webiste like hindi movie, english movie chinish movie, sci-fi movie, action movie and motch more">
    <link rel="canonical" href="https:monabbirhasan.com/fantasyfocuse.com" />
    <!-- Bootstrap CSS -->
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <!-- google fonts link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- cerusal slider link -->
    <link rel="icon" type="image/x-icon" href="https://cdn.pixabay.com/photo/2016/03/31/18/36/cinema-1294496__340.png">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./css/responsive.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <title>FantasyFocus.com is biggest movie website science fiction movie</title>
  </head>
  <body id="head_top">
    <div class="loader">
      <img src="images/hour_loader.gif" />
    </div>
    <header id="head_top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="index.php"><span>
            <ion-icon name="film"></ion-icon>
          </span>filme</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <?php
              $get_category="SELECT * FROM category WHERE is_sub=0";
              $category_result=mysqli_query($conn,$get_category);
              if(mysqli_num_rows($category_result)>0){
              while ($row=mysqli_fetch_assoc($category_result)) {
              ?>
              <li class="nav-item">
                <a class="nav-link" href="category_page.php?item_id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
              </li>
              <?php
              }
              }
              ?>
            </ul>
            <div class="language">
              <span style="color: black;background: orange;">
                <ion-icon onclick="searchBTN();" name="search-outline"></ion-icon>
              </span>
              <span style="color: whitesmoke;">
                <ion-icon name="language"></ion-icon>
              </span>
              <select class="language" name="language">
                <option value="0">En</option>
                <option value="0">Bn</option>
                <option value="0">In</option>
              </select>
              <form class="form">
                <?php
                if(isset($_SESSION['username'])){
                ?>
                <img src='../BackEnd/u_image/<?php echo $_SESSION['image']; ?>' width='50px' style='border-radius: 100%;border:2px solid orange;'>
                <span class="badge badge-success" style="background: orange;">
                  <a style="color:white;text-decoration: none;" href="logout.php">LogOut</a>
                </span>
                <?php
                }else{
                ?>
                <button class="btn text-white" type="submit">
                <a style="color: white;" href="./Login.php">Login</a>
                </button>
                <button class="btn text-white" type="submit">
                <a style="color: white;" href="./SignUp.php">SignUp</a>
                </button>
                <?php
                }
                ?>
              </form>
            </div>
            
          </div>
        </nav>
      </div>
      <style type="text/css">
      .search-box{
      width: 300px;
      box-shadow: 2px 2px 5px #eee;
      background: #fff;
      padding: 5px;
      position: absolute;
      left: -50%;
      top: -80%;
      display: none;
      visibility: hidden;
      }
      @media (min-width: 320px) and (max-width: 480px){
      .active_search{
      display:block;
      width: 300px;
      position: absolute;
      left: 0%;
      top: 80%;
      box-shadow: 2px 2px 5px #eee;
      background: #fff;
      padding: 5px;
      }
      }
      .active_search{
      display:block;
      width: 300px;
      position: absolute;
      left: 50%;
      top: 80%;
      box-shadow: 2px 2px 5px #eee;
      background: #fff;
      padding: 5px;
      }
      </style>
      <div class="search-box" id="searc">
        <form method="post" action="searc_result.php" enctype="multipart/form-data">
          <button class="btn btn-danger m-2" onclick="close_searc();" type="button">X</button>
          <input type="text" class="form-control" name="search_box" id="search">
          <button name="searc_btm" type="submit" class="btn btn-primary m-3">Search</button>
        </form>
      </div>
    </header>