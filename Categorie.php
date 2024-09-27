<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="Categorie.css" />

    <!-- Google Font Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
<?php
    if(!isset($_SESSION["login"]) && !isset($_SESSION["password"])){
      header("location:login.php");
      exit();
    }
    ?>
    <header>
        <div class="logo__menu">
            <h2 id="logo">Mongtel Solution</h2>
            <div id="menuBarIcon"><i class="fa-solid fa-bars"></i></div>
        </div>
        <div class="searchBar">
        <input
            type="text"
            name="search"
            placeholder="search"
            id="search"
            autocomplete="off"
        />
        <button id="searchIcon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        </div>
        <div class="message">
        <div id="bell"><i class="fa-solid fa-bell"></i></div>
        <div class="profile">
            <img
            src="https://avatars.githubusercontent.com/u/83676505?v=4"
            alt="profile image"
            />
        </div>
        </div>
    </header>
    <div class="main__container">
        <nav>
            <div class="dashboard navOptions">
            <div class="icons">
                <i class="fa-solid fa-file"></i>
            </div>
            <a class="navPara" href="Dashboard.php">dashboard</a>
            </div>
            <div class="articles navOptions">
            <div class="icons">
                <i class="fa-solid fa-newspaper"></i>
            </div>
            <a class="navPara" href="Annonce.php">Annonces</a>
            </div>
        <div class="report navOptions">
          <div class="icons">
            <i class="fa-solid fa-bug"></i>
          </div>
          <a class="navPara" href="Vente.php">Ventes</a>
        </div>

        <div class="categorie navOptions">
          <div class="icons">
            <i class="fa-solid fa-building-columns categorie"></i>
          </div>
          <a class="navPara categorie" href="Categorie.php">Categorie</a>
        </div>

        <div class="profile navOptions">
          <div class="icons">
            <i class="fa-solid fa-id-card"></i>
          </div>
          <a class="navPara" href="Profile.php">Profile</a>
        </div>

        <div class="user navOptions">
          <div class="icons">
          <i class="fa-solid fa-users user"></i>
          </div>
          <a class="navPara user" href="user.php">Users</a>
        </div>

        <div class="logout navOptions">
          <div class="icons">
            <i class="fa-solid fa-right-from-bracket"></i>
          </div>
          <a class="navPara" href="Logout.php">Logout</a>
        </div>
      </nav>

      <main>
        <div class="cards">
          <div class="card">
            <div class="title">
              <h2>60.50k</h2>
              <p>Article Views</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-eye"></i>
            </div>
          </div>

          <div class="card">
            <div class="title">
              <h2>150</h2>
              <p>Likes</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-thumbs-up"></i>
            </div>
          </div>

          <div class="card">
            <div class="title">
              <h2>320</h2>
              <p>Comments</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-message"></i>
            </div>
          </div>

          <div class="card">
            <div class="title">
              <h2>70</h2>
              <p>Published</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-check-to-slot"></i>
            </div>
          </div>
        </div>

        <div class="recent__articles">
          <div class="main__articles">
            <div class="article__title">
              <p>Recent Articles</p>
              <button>View All</button>
            </div>
            <hr />
            <table>
              <tr id="table__head">
                <th>Article</th>
                <th>Views</th>
                <th>Comments</th>
                <th>Status</th>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
              <tr>
                <td>Article 19</td>
                <td>29.9k</td>
                <td>210</td>
                <td>Published</td>
              </tr>
            </table>
          </div>
        </div>
      </main>
    </div>
    <footer>
      <p>@ All right Reserved. Mongtel Solution</p>
    </footer>
  </body>


</html>