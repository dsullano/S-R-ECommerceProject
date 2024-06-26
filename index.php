<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style and Relax with S&R</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    include ("includes/header.php");
    ?>

     <!-- Banner carousel -->
     <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="images/banner-1.jpg" class="d-block w-100 banner-1" alt="...">
          </div>
          <div class="carousel-item">
          <img src="images/banner-2.jpg" class="d-block w-100 banner-2" alt="...">
          </div>
      </div>
  </div>

  <!-- Brand Display -->
  <div class="w-100 brand-display">
    <div class="container-fluid w-75 text-center py-3">
      <div class="row d-flex">
        <div class="col">
          <a href="#">
            <svg class="brand-display-logo" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>The North Face</title><path fill="#f4fffd" d="M15.816 6.36v3.36h.228a4.847 4.847 0 0 1 4.764 4.764v3.036H24v-3.132c0-4.428-3.6-8.028-8.028-8.028H15.9Zm-9.06.012v.6h1.008V9.72h.696V6.972h1.008v-.6zm2.964 0V9.72h.696v-1.5h1.308v1.5h.696V6.372h-.696v1.272h-1.308V6.372Zm3 0V9.72h2.4v-.588h-1.752v-.876h1.548v-.588h-1.548V6.96h1.752v-.588ZM4.644 10.14c-.444 0-1.608.192-1.608 1.752s1.164 1.752 1.608 1.752c.444 0 1.608-.192 1.608-1.752S5.088 10.14 4.644 10.14zM0 10.236v3.336h.648v-2.376H.66l1.368 2.376h.696v-3.336h-.648v2.316h-.012L.732 10.236Zm6.54 0 .012 3.336h.684v-1.308h.72c.516 0 .54.18.54.636 0 .348.024.516.072.672h.768v-.084c-.144-.048-.144-.168-.144-.66 0-.624-.144-.732-.42-.852.324-.108.516-.42.516-.792 0-.288-.168-.948-1.056-.948zm2.916 0v.588h1.02v2.748h.696v-2.748h1.008v-.588zm2.976 0v3.336h.696v-1.5h1.296v1.5h.696v-3.336h-.696v1.26h-1.296v-1.26zm3.372 0v3.348h.156c1.08 0 1.944.876 1.944 1.944v1.992h2.388v-2.988c-.012-2.316-1.86-4.2-4.152-4.296h-.252Zm-11.16.504c.372 0 .9.228.9 1.164 0 .936-.528 1.164-.9 1.164s-.912-.228-.912-1.164c0-.936.54-1.164.912-1.164zm2.58.072h.864c.408 0 .492.252.492.432 0 .324-.18.456-.54.456h-.816Zm3.684 3.204c-.876 0-1.572.612-1.572 1.812 0 1.188.648 1.8 1.56 1.8.864 0 1.344-.516 1.488-1.26h-.72c-.084.42-.36.648-.756.648-.612 0-.852-.552-.852-1.164 0-.972.504-1.2.852-1.2.588 0 .696.384.756.588v-.012h.72c-.036-.504-.456-1.212-1.476-1.212zm-6.696.084v3.432h.708v-1.44h1.512v-.612H4.92v-.768h1.728V14.1Zm3.228 0-1.224 3.432h.756l.228-.708h1.284l.216.708h.78L8.268 14.1Zm5.232 0v3.432h2.46v-.612h-1.8v-.888h1.596v-.6h-1.596v-.72h1.8V14.1Zm3.144.012v3.432h1.596v-1.992c0-.792-.648-1.44-1.44-1.44zm-7.98.768h.012l.42 1.356h-.876Zm-4.92.912a.927.927 0 0 0-.936.924c0 .528.432.924.936.924a.917.917 0 0 0 .924-.924.917.917 0 0 0-.924-.924zm0 .144c.42 0 .756.336.756.78 0 .456-.324.792-.756.792s-.768-.348-.768-.792c0-.444.336-.78.768-.78zm-.36.24v1.092h.168V16.8h.18l.3.468h.18l-.312-.48c.168-.024.288-.108.288-.3 0-.216-.132-.312-.384-.312zm.168.132h.228c.12 0 .24.024.24.168 0 .168-.144.18-.288.18h-.18z"/></svg>
          </a>
        </div>
        <div class="col">
            <a href="#">
              <svg class="brand-display-logo" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>H&amp;M</title><path fill="#f4fffd" d="M16.866 4.565c.871-.429 1.303-.372 1.313.061.012.565-.071 1.313-.131 1.857-.323 2.947-.864 5.356-.906 8.383 1.424-3.686 2.619-6.248 4.156-9.403.488-1.004.799-.818 1.2-.996 1.563-.695 1.622-.268 1.417.581-.758 3.15-2.695 13.068-2.992 14.595-.086.442-.566.255-.691.082-.556-.769-1.183-.781-1.112-1.293.348-2.546 1.603-8.934 1.93-10.439-1.669 3.42-3.398 7.694-4.286 10.118-.189.515-.531.477-.745.1-.3-.529-.883-.799-.979-1.424-.306-1.987.348-5.776.439-8.172-.908 2.618-2.433 7.701-3.101 9.997-.276.95-1.193.795-.949-.131 1.015-3.854 3.201-10.67 4.148-13.121.222-.576.805-.556 1.289-.795Zm-5.535-.474c.276.067.254.393.085.838-.499 1.314-1.19 3.04-1.981 5.076.497-.057.767-.076.767-.076.713-.088.846.269.645.648-.16.303-.353.101-1.02 1.096-.376.561-.99.709-1.332.784-.821 2.175-1.702 4.602-2.557 7.188-.125.377-.489.295-.598.142-.402-.562-.698-.58-1.01-1.034-.037-.074-.11-.173-.066-.354.229-.936.837-2.859 1.762-5.392-1.165.253-2.426.524-2.947.645-.624 1.651-1.234 3.308-1.811 4.944-.358 1.015-1.29.819-.963-.141.521-1.528 1.096-3.115 1.673-4.654-.646-.069-.864-.525-1.225-.906-.139-.147-.443-.126-.592-.332-.267-.371-.241-.536.377-.714.806-.233 1.617-.449 2.432-.649 1.044-2.694 1.987-5.006 2.49-6.239.388-.951 1.387-.862 1.008.075-.772 1.906-1.563 3.885-2.344 5.893.963-.217 1.931-.409 2.904-.576.713-1.831 1.462-3.648 2.247-5.449.055-.126.215-.304.381-.332.525-.09 1.379-.552 1.675-.481ZM9.543 16.426c.082-.05.163-.111.244-.178-.062-.183-.123-.366-.183-.55-.061.078-.12.157-.179.237-.349.479-.142.65.118.491Zm.465-2.275c.433-.489-.423-.693-.226.054.011.042.025.092.04.146.063-.065.125-.132.186-.2Zm.45 1.473c.429-.372.838-.003.414.624a6.955 6.955 0 0 1-.307.424c.045.128.091.255.14.381.219.562-.357.703-.542.237a7.29 7.29 0 0 1-.05-.129c-.35.31-.754.505-1.186.37-.711-.221-.892-1.222-.228-1.993.266-.309.466-.524.634-.695-.041-.133-.081-.267-.118-.401-.087-.312-.164-.675.148-1.046.586-.695 1.945-.078 1.257.992-.165.258-.359.501-.561.748.07.221.14.441.212.661.061-.06.123-.117.187-.173Z"/></svg>
            </a>
        </div>
        <div class="col">
            <a id="#">
              <svg class="brand-display-logo" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Uniqlo</title><path fill="#f4fffd" d="M0 .01v23.98h24V.01ZM4.291 3.29h4.553l.006 5.803h1.511v1.511h-6.82V9.094h3.783v-4.29H4.291zm10.11 0h5.302v1.514H14.4zm-.762 5.807h6.816v1.511H13.64zM4.29 13.385l6.072.002-1.513 7.322H2.777l.305-1.516h4.553l.892-4.29H5.49l-.457 2.148H3.521Zm9.348 0h6.816v7.324H13.64zm1.517 1.517v4.291h3.787v-4.29z"/></svg>
            </a>
        </div>
        <div class="col">
          <a href="#">
            <svg class="brand-display-logo" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Dior</title><path fill="#f4fffd" d="M.0728 8.7751h3.1157c2.6789 0 3.7272 1.5724 3.7272 3.237 0 1.6937-1.3443 3.203-3.9019 3.203H.0776c-.0534 0-.0728-.034-.0728-.0631 0-.034.034-.0631.0825-.0631h.5484c.1699 0 .2815-.1019.2815-.2912V9.2022c0-.1407-.0679-.296-.2912-.296H.0679C.0243 8.9062 0 8.8771 0 8.8431c0-.0291.0097-.068.0728-.068m1.9461 6.1392c0 .1407.0631.1844.1553.1844h.825c2.0334 0 2.7711-1.5578 2.7711-3.1205S4.9889 8.9013 3.271 8.9013H2.1499c-.1165 0-.1262.0971-.1262.1407l-.0048 5.8723zm5.2073-6.1392c-.0485 0-.0922.0194-.0922.0582s.0243.0631.0679.0631h.5484c.1262 0 .2475.0874.2475.33v5.5762c0 .1165-.0874.2912-.2427.2912h-.5434c-.0631 0-.0679.0485-.0679.0679s-.0049.0534.0679.0534h2.6401c.0388 0 .0922-.0049.0922-.0437s-.0097-.0776-.0776-.0776h-.5097c-.0728 0-.2718-.0437-.2718-.2669V9.1682c0-.1602.1019-.2669.2863-.2669h.4999c.0437 0 .0679-.0243.0679-.0582 0-.034-.0243-.0631-.0825-.0631-.0005-.0048-2.6396.0092-2.6303-.0049zm4.1251 3.2225c0-1.7811.7959-3.2224 2.2906-3.2224 1.4656 0 2.2906 1.4414 2.2906 3.2224S15.1804 15.22 13.642 15.22c-1.4899.0049-2.2907-1.4414-2.2907-3.2224m2.2907 3.3583c2.1256 0 3.4651-1.5044 3.4651-3.3535s-1.3249-3.3583-3.4651-3.3583c-2.1353 0-3.4651 1.5044-3.4651 3.3535s1.3831 3.3583 3.4651 3.3583m10.2593-.1796c-.8347.0874-1.2958-1.2812-1.718-1.9315-.3154-.4805-.9852-.9706-1.6452-1.0677 1.0871-.0631 2.3052-.4125 2.3052-1.6452 0-.9997-.6163-1.7568-2.8779-1.7568h-2.6061c-.034 0-.0679.0194-.0679.0582s.034.0631.0679.0631h.5969c.1262 0 .2475.0874.2475.33v5.5762c0 .1165-.0874.2912-.2427.2912h-.587c-.0485 0-.0679.0388-.0679.0582s.0194.0631.0679.0631h2.7662c.0388 0 .0728-.0194.0728-.0582s-.0243-.0631-.0776-.0631h-.5581c-.0728 0-.2718-.0485-.2718-.2669v-2.6352h.2863c1.3686 0 1.4705 1.485 2.1499 2.3343.5824.728 1.3443.8202 1.7762.8202.1844 0 .3106-.0049.4271-.034.0728-.0243.0874-.1504-.0437-.1359m-4.3192-6.2798h.4028c.6891 0 1.8053.2718 1.8053 1.5724 0 1.1939-.99 1.5967-1.9073 1.5967h-.5872V9.1682c.0001-.165.102-.2717.2864-.2717"/></svg>
          </a>
        </div>
        <div class="col">
          <a href="#">
            <svg class="brand-display-logo" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Under Armour</title><path fill="#f4fffd" d="M15.954 12c-.089.066-.195.142-.324.233-.826.585-2.023.985-3.58.985h-.104c-1.556 0-2.755-.4-3.58-.985A36.43 36.43 0 018.042 12c.09-.067.196-.143.324-.234.825-.584 2.024-.985 3.58-.985h.104c1.557 0 2.756.401 3.58.985.129.09.235.167.325.234M24 7.181s-.709-.541-2.95-1.365c-1.968-.721-3.452-.883-3.452-.883l.006 4.243c0 .598-.162 1.143-.618 1.765-1.672-.61-3.254-.985-4.981-.985-1.728 0-3.308.375-4.98.985-.457-.619-.62-1.168-.62-1.765l.007-4.243s-1.494.16-3.463.883C.709 6.642 0 7.181 0 7.181c.093 1.926 1.78 3.638 4.435 4.82C1.777 13.18.09 14.887 0 16.818c0 0 .709.54 2.949 1.365 1.968.721 3.453.883 3.453.883l-.007-4.244c0-.597.164-1.143.619-1.764 1.672.61 3.252.983 4.98.983 1.727 0 3.309-.374 4.98-.983.457.62.62 1.167.62 1.764l-.006 4.244s1.484-.16 3.452-.883c2.241-.826 2.95-1.365 2.95-1.365-.093-1.927-1.78-3.64-4.435-4.819 2.657-1.182 4.343-2.888 4.435-4.82"/></svg>
          </a>
        </div>
        <div class="col">
          <a href="#">
            <svg class="brand-display-logo" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Adidas</title><path fill="#f4fffd" d="M11.936 17.952c0-.644.517-1.16 1.162-1.16.644 0 1.16.516 1.16 1.16a1.157 1.157 0 01-1.16 1.161 1.157 1.157 0 01-1.162-1.16m4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161-.517 1.161-1.16 1.161a1.157 1.157 0 01-1.162-1.16m-10.95 0c0-.645.517-1.162 1.161-1.162s1.16.517 1.16 1.161-.516 1.161-1.16 1.161a1.157 1.157 0 01-1.161-1.16m-4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161a1.157 1.157 0 01-1.161 1.161 1.157 1.157 0 01-1.16-1.16m9.55-2.052h-1.01v4.063h1.01v-4.063zM3.3 19.964h1.01v-4.063H3.3v.326a2.087 2.087 0 00-1.2-.374c-1.162 0-2.1.938-2.1 2.1 0 1.168.938 2.099 2.1 2.099.445 0 .858-.135 1.2-.374v.286zm15.674 0h1.01v-4.063h-1.01v.326a2.087 2.087 0 00-1.2-.374c-1.162 0-2.1.938-2.1 2.1a2.092 2.092 0 002.1 2.099c.445 0 .858-.135 1.2-.374v.286zm1.384-1.32c.032.82.732 1.4 1.9 1.4.955 0 1.742-.414 1.742-1.328 0-.636-.358-1.01-1.185-1.17l-.644-.126c-.414-.08-.7-.16-.7-.406 0-.27.278-.39.628-.39.51 0 .716.255.732.557h1.018c-.056-.795-.692-1.328-1.718-1.328-1.057 0-1.686.58-1.686 1.336 0 .922.748 1.073 1.392 1.193l.533.095c.382.072.549.183.549.406 0 .199-.191.397-.645.397-.66 0-.874-.342-.882-.636h-1.034zM8.024 14.517v1.71a2.087 2.087 0 00-1.2-.374c-1.162 0-2.1.938-2.1 2.1 0 1.168.938 2.099 2.1 2.099.444 0 .858-.135 1.2-.374v.286h1.01v-5.447h-1.01zm6.226 0v1.71a2.087 2.087 0 00-1.2-.374c-1.161 0-2.1.938-2.1 2.1a2.092 2.092 0 002.1 2.099c.445 0 .858-.135 1.2-.374v.286h1.01v-5.447h-1.01zm-11.626-1.2l.684 1.2h4.716l-1.869-3.229-3.53 2.028zm7.913 2.21v-1.01h3.713l-3.96-6.855L6.751 9.69l2.776 4.827v1.01h1.01zm5.217-1.01h4.723L14.37 3.948l-3.531 2.036 4.915 8.533z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
<br> <br>


    <!-- Clothing Display-->
    <div class="w-100">
      <div class="container-fluid w-75 text-center my-4 px-2">
        <div class="row tag-bar mb-3">
          <div class="col">
            <button type="button" class="btn btn-outline-secondary active">All</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Coats</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Shirts</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Polos</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Dresses</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Hoodies</button>
          </div>
          <!-- <div class="col">
            <button type="button" class="btn btn-outline-secondary">Accessories</button>
          </div> -->
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Shorts</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Trousers</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Socks</button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-outline-secondary">Shoes</button>
          </div>
        </div>

        <!-- Product Card Container: turn cards into links that go to their product page via ID. Design the card -->
        <div class="row product-container">
          <div class="col">
            <div class="card text-start">
              <img src="images/prod-6.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">Linen Blend Open Collar Short Sleeve Shirt</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 990.00</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-start">
              <img src="images/prod-5.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">Pleated Skirt (Abstract)</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 2490.00</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-start">
              <img src="images/prod-2.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">Dry Stretch Sweat Long Sleeve Full-Zip Hoodie</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 1799.99</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-start">
              <img src="images/prod-4.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">Washed Jersey Jogger Pants (Denim)</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 499.99</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row product-container">
          <div class="col">
            <div class="card text-start">
              <img src="images/prod-1.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">Crew Neck Short Sleeve T-Shirt</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 299.99</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-start">
              <img src="images/prod-8.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">AIRism Bra Camisole</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 990.00</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-start">
              <img src="images/prod-7.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">Cotton Blend Drawstring Jacket</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 2989.00</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-start">
              <img src="images/prod-3.avif" class="card-img-top" alt="...">
              <div class="card-body ps-0">
                <h5 class="card-title">Ultra Stretch DRY-EX Jogger Pants</h5>
                <a href="#" class="btn btn-link stretched-link pe-0 ps-0 fs-5 fw-bold">PHP 399.99</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row d-flex justify-content-center">
          <button type="button" class="btn btn-primary w-25 see-more">
            See More
          </button>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


  </body>

  <!-- FOoter-->
<?php
    include("includes/footer.php");
?>

  
</html>