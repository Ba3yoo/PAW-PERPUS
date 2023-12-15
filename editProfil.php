<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profil</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      .text-custom {
        color: #f4683c;
      }

      .hr-custom {
        border-color: #f4683c;
      }
      .bg{
        border-radius: 4%;
        background-color: #f4683c;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5">
      <div class="text-[#F4683C]">
        <h1 class="text-xl font-bold font-Inter text-custom">Setting Akun</h1>
        <hr class="w-20 bg-[#F4683C]" />
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <p>Foto Profil</p>
          <img
            class=""
            src="https://cdn.dribbble.com/users/5534/screenshots/14230133/profile_4x.jpg"
            width="100"
            alt=""
          />
          <p class="text-muted mt-3">Upload New Photo</p>
        </div>
        <div class="col-md-3 bg p-4 rounded-xl">
          <div class="row">
            <div class="col-3  bg-white rounded-sm p-2">
              <svg
                width="38"
                height="36"
                viewBox="0 0 38 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.6756 31.643C18.4754 31.643 18.2738 31.5977 18.0887 31.5082C16.0197 30.4921 13.7205 29.9614 11.3869 29.9614C9.05327 29.9614 6.75415 30.4921 4.68507 31.5082C4.49172 31.6025 4.27585 31.6485 4.0582 31.6416C3.84055 31.6347 3.62843 31.5753 3.44221 31.469C3.25599 31.3627 3.10192 31.2131 2.99481 31.0346C2.8877 30.8561 2.83114 30.6546 2.83057 30.4496V7.77358C2.83056 7.58108 2.88001 7.39142 2.9747 7.2208C3.06939 7.05018 3.20651 6.90366 3.37437 6.79374C8.16719 3.65371 14.6066 3.65371 19.4007 6.79374C19.7404 7.01692 19.9432 7.38332 19.9432 7.77358V30.4496C19.9432 30.7661 19.8097 31.0697 19.572 31.2935C19.3342 31.5173 19.0118 31.643 18.6756 31.643ZM11.3869 27.5745C13.4277 27.5745 15.4699 27.9194 17.408 28.6092V8.41806C15.5946 7.37607 13.5113 6.8248 11.3869 6.8248C9.26248 6.8248 7.17916 7.37607 5.36578 8.41806V28.6092C7.28999 27.9248 9.32996 27.5742 11.3869 27.5745Z"
                  fill="#F27851"
                />
                <path
                  d="M33.2533 31.643C33.053 31.643 32.8514 31.5977 32.6664 31.5082C30.5973 30.4921 28.2982 29.9614 25.9645 29.9614C23.6309 29.9614 21.3318 30.4921 19.2627 31.5082C19.0694 31.6025 18.8535 31.6485 18.6358 31.6416C18.4182 31.6347 18.2061 31.5753 18.0198 31.469C17.8336 31.3627 17.6796 31.2131 17.5724 31.0346C17.4653 30.8561 17.4088 30.6546 17.4082 30.4496V7.77358C17.4082 7.58108 17.4576 7.39142 17.5523 7.2208C17.647 7.05018 17.7841 6.90366 17.952 6.79374C22.7448 3.65371 29.1843 3.65371 33.9783 6.79374C34.3181 7.01692 34.5209 7.38332 34.5209 7.77358V30.4496C34.5209 30.7661 34.3873 31.0697 34.1496 31.2935C33.9119 31.5173 33.5895 31.643 33.2533 31.643ZM25.9645 27.5745C28.0054 27.5745 30.0475 27.9194 31.9857 28.6092V8.41806C30.1723 7.37607 28.089 6.8248 25.9645 6.8248C23.8401 6.8248 21.7568 7.37607 19.9434 8.41806V28.6092C21.8676 27.9248 23.9076 27.5742 25.9645 27.5745Z"
                  fill="#F27851"
                />
              </svg>
            </div>
            <h1 class="text-light text-2xl mr-2 col ">120</h1>
          </div>
          <div class="">
            <h1 class="text-white mt-5">Riwayat</h1>
          </div>
        </div>
      </div>

      <div class="mt-4 row">
        <div class="col">
          <p>Nama Lengkap</p>
          <input type="text" class="form-control mt-2" />
        </div>
        <div class="col">
          <p>Email ID</p>
          <input type="text" class="form-control mt-2" />
        </div>
      </div>
      <div class="mt-4 row">
        <div class="col">
          <p>Nomor Pendaftaran</p>
          <input type="text" class="form-control mt-2" />
        </div>
        <div class="col">
          <p>Nomor HP</p>
          <input type="text" class="form-control mt-2" />
        </div>
      </div>
      <div class="mt-4">
        <p>Bio</p>
        <textarea class="form-control" rows="4"></textarea>
      </div>
      <div class="mt-4">
        <button class="btn btn-primary">Update Profile</button>
        <button class="btn btn-secondary">Reset</button>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
