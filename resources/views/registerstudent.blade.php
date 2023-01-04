<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MahasisWork | Student Register</title>
    <link rel="stylesheet" href="css/registerstudent.css" />
  </head>
  <body>
    <section class="container">
      <header>Welcome, student!</header>
      <h2>please enter your details</h2>
      <form action="{{route('DataStudent')}}" method= "POST" class="form">
        @csrf
        <div class="input-box">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email address" required value="{{ old('email') }}"/>
        </div>

        <div class="input-box">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required value="{{ old('name') }}"/>
        </div>

        <div class="input-box">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required />
        </div>

        <div class="column">
            <div class="input-box">
                <label for="birthdate">Birth Date</label>
                <input type="date" name="birthdate" id="birthdate" placeholder="Enter birth date" required />
            </div>
            <div class="input-box">
                <label for="phonenumber">Phone Number</label>
                <input type="number" name="phonenumber" id="phonenumber" placeholder="Enter your phone number" required />
            </div>
        </div>
    
        <div class="input-box address">
          <label for="address">Address</label>
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>Nanggroe Aceh Darussalam</option>
                <option>Sumatera Utara</option>
                <option>Sumatera Selatan</option>
                <option>Sumatera Barat</option>
                <option>Bengkulu</option>
                <option>Riau</option>
                <option>Kepulauan Riau</option>
                <option>Jambi</option>
                <option>Lampung</option>
                <option>Bangka Belitung</option>
                <option>Banten</option>
                <option>DKI Jakarta</option>
                <option>Jawa Barat</option>
                <option>Jawa Tengah</option>
                <option>DI Yogyakarta</option>
                <option>Jawa Timur</option>
                <option>Kalimantan Timur</option>
                <option>Kalimantan Barat</option>
                <option>Kalimantan Tengah</option>
                <option>Kalimantan Selatan</option>
                <option>Kalimantan Utara</option>
                <option>Bali</option>
                <option>Nusa Tenggara Timur</option>
                <option>Nusa Tenggara Barat</option>
                <option>Gorontalo</option>
                <option>Sulawesi Barat</option>
                <option>Sulawesi Tengah</option>
                <option>Sulawesi Utara</option>
                <option>Sulawesi Tenggara</option>
                <option>Sulawesi Selatan</option>
                <option>Maluku Utara</option>
                <option>Maluku</option>
                <option>Papua Barat</option>
                <option>Papua</option>
                <option>Papua Tengah</option>
                <option>Papua Selatan</option>
                <option>Papua Pegunungan</option>
              </select>
            </div>
            <input type="text" name="address" id="address" placeholder="Enter your city" required />
          </div>
        </div>
        <button type="submit">Register</button>
      </form>
    </section>
  </body>
</html>

