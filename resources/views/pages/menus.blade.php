@extends('layouts.main')

@section('pageContent')
  <!-- Menu Section -->

<section class="Menus-section" id="menu">
  <div class="container">

    <div class="row g-5" style="margin-top:100px">

      <!-- Card 1 -->
      <div class="col-lg-6">
        <div class="menus-item cyan">

          <img src="{{ asset('build/assets/img/dinner.webp') }}" class="img-fluid mx-3" width="150">

          <div>
            <h3>Rice with curry <span style="float:right;color:#ff7b00;">Rs.3200.00</span></h3>
            <p>Traditional Sri Lankan rice served with spicy curries.</p>
          </div>

        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-6">
        <div class="menus-item teal">

          <img src="{{ asset('build/assets/img/rice and curry.jpeg') }}" class="img-fluid mx-3" width="150">

          <div>
            <h3>Rice and curry <span style="float:right;color:#ff7b00;">Rs.1900.00</span></h3>
            <p>A balanced meal with rice and vegetable curries.</p>
          </div>

        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-6">
        <div class="menus-item red">

          <img src="{{ asset('build/assets/img/breaksfast.webp') }}" class="img-fluid mx-3" width="150">

          <div>
            <h3>Breakfast food <span style="float:right;color:#ff7b00;">Rs.3000.00</span></h3>
            <p>Healthy breakfast with eggs, fruits, and drinks.</p>
          </div>

        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-6">
        <div class="menus-item indigo">

          <img src="{{ asset('build/assets/img/lunch.webp') }}" class="img-fluid mx-3" width="150">

          <div>
            <h3>Rice <span style="float:right;color:#ff7b00;">Rs.2230.00</span></h3>
            <p>Simple rice served with side dishes.</p>
          </div>

        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-lg-6">
        <div class="menus-item pink">

          <img src="{{ asset('build/assets/img/biriyani.jpg') }}" class="img-fluid mx-3" width="150">

          <div>
            <h3>Biriyani <span style="float:right;color:#ff7b00;">Rs.1900.00</span></h3>
            <p>Aromatic basmati rice cooked with spices and meat.</p>
          </div>

        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-lg-6">
        <div class="menus-item cyan">

          <img src="{{ asset('build/assets/img/Kottu.webp') }}" class="img-fluid mx-3" width="150">

          <div>
            <h3>Kottu <span style="float:right;color:#ff7b00;">Rs.2000.00</span></h3>
            <p>Sri Lankan street food made with chopped roti.</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>




<!--another part of Menus section-->

<section class="menu-section mt-5 opacity-20">
<div class="container ">
  <div class="row">
    <div class="col-lg-6">
      <h3 class="mb-4">Starters</h3>
      <hr>
      <div class="menu-item">
        <h5>Tomato Soup</h5>
        <span>$5.99</span>
      </div>
      <div class="menu-item">
        <h5>Garlic Bread</h5>
        <span>$4.50</span>
      </div>
      <div class="menu-item">
        <h5>Bruschetta</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Caesar Salad</h5>
        <span>$3.99</span>
      </div>
      <div class="menu-item">
        <h5>Tomato Soup</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>Garlic Bread </h5>
        <span>$5.99</span>
      </div>
      <div class="menu-item">
        <h5>Garlic  Mushrooms</h5>
        <span>$6.99</span>
      </div>
      <div class="menu-item">
        <h5> Salad</h5>
        <span>$8.99</span>
      </div>
    </div>

    <!-- Main Courses Section -->
    <div class="col-lg-6">
      <h3 class="mb-4">Main Courses</h3>
      <hr>
      <div class="menu-item">
        <h5>Grilled Chicken</h5>
        <span>$14.99</span>
      </div>
      <div class="menu-item">
        <h5>Spaghetti Carbonara</h5>
        <span>$13.99</span>
      </div>
      <div class="menu-item">
        <h5>Beef Steak</h5>
        <span>$19.99</span>
      </div>
      <div class="menu-item">
        <h5>Grilled Salmon</h5>
        <span>$18.99</span>
      </div>
      <div class="menu-item">
        <h5>Mozzaralla fried rice</h5>
        <span>$12.99</span>
      </div>
      <div class="menu-item">
        <h5>Fried chicken with rice</h5>
        <span>$14.99</span>
      </div>
      <div class="menu-item">
        <h5>machrooni</h5>
        <span>$17.99</span>
      </div>
      <div class="menu-item">
        <h5>fry vege noodless</h5>
        <span>$12.99</span>
      </div>
      <div class="menu-item">
        <h5>fride Salmon</h5>
        <span>$13.99</span>
      </div>
    </div>
  </div>

  <!-- Desserts Section -->
  <div class="row mt-5">
    <div class="col-lg-6">
      <h3 class="mb-4">Desserts</h3>
      <hr>
      <div class="menu-item">
        <h5>Chocolate Cake</h5>
        <span>$5.50</span>
      </div>
      <div class="menu-item">
        <h5>Tiramisu</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Ice Cream Sundae</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>Cream Sundae</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>Ice Sundae</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>Ages</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>salad cream</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>Cremy</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>Ice cre1</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>cup ice cream</h5>
        <span>$4.99</span>
      </div>
      <div class="menu-item">
        <h5>cream cup</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>cake</h5>
        <span>$6.50</span>
      </div>
    </div>



    <!-- Beverages Section -->
    <div class="col-lg-6">
      <h3 class="mb-4">Beverages</h3>
      <hr>
      <div class="menu-item">
        <h5>Coffee</h5>
        <span>$2.99</span>
      </div>
      <div class="menu-item">
        <h5>Fresh Juice</h5>
        <span>$3.99</span>
      </div>
      <div class="menu-item">
        <h5>Sparkling Water</h5>
        <span>$2.50</span>
      </div>
      <div class="menu-item">
        <h5>juice</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Fresh Juice1</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Fields</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Souap</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5><Var>Mango Juice</Var></h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Smothee juice</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Rose Wine</h5>
        <span>$6.50</span>
      </div>
      <div class="menu-item">
        <h5>Flower Wine</h5>
        <span>$6.50</span>
      </div>
    </div>
  </div>
</div>
</section>

@endsection


@push('styles')

<style>
    /*====start menu section=======*/

        .menu-section {
        position: relative;
        padding: 60px 0;
        background-image: url('{{ asset('build/assets/img/food-bg.jpg') }}');
        background-size: cover;
        background-position: center;
        z-index: 1;
        }

        /* Overlay */
        .menu-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6); /* adjust opacity here */
        z-index: -1;
        }
      .menu-section h2{
        color: var(--background-color);

      }
      .menu-section p{
        color: var(--background-color);

      }

      .menu-section h3{
        font-weight: bolder;
        color: var(--contrast-color);
        background-color: #ff7b00;
        border-radius: 10px;
        text-align: center;
      }

      .menu-heading {
        text-align: center;
        margin-bottom: 5px;
        font-family: 'Nunito', sans-serif;
        font-size: 36px;
        color: #f8efea;
      }

      .menu-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #e9ecef;

      }

      .menu-item h5 {
        margin: 0;
        font-size: 20px;
        font-family: 'Nunito', sans-serif;
        color: #ffffff;
      }

      .menu-item span {
        font-size: 18px;
        font-family: 'Roboto', sans-serif;
        color: #ffffff;
      }
/* ------service start------- */

.Menus-section .menus-item{
  background-color: var(--surface-color);
  border: 1px solid  color-mix(in srgb, var(--default-color), transparent 85%) ;
  height: 100%;
  padding: 30px;
  transition: 0.3s;
  border-radius: 10px;
  display: flex;

}
.Menus-section .menus-item.icon1 {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 72px;
  height: 72px;
  flex-shrink: 0;
  font-size: 32px;
  border-radius: 10px;
  position: relative;
  margin-right: 25px;

}

.Menus-section .menus-item h3 {
  font-size: 22px;
  transition: 0.3s;
  color: color-mix(in srgb, var(--heading-color), transparent 25%);
  font-weight: 700;

}

.Menus-section .menus-item p {
  margin-bottom: 0;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  transition: 0.3s;
}

.Menus-section .menus-item a.read-more {
  margin-top: 10px;
  transition: 0.3s;
  font-size: 14px;
  display: inline-flex;
  align-items: center;
  color:#ff7b00;
  text-decoration: none;
}

.Menus-section .menus-item .read-more i {
  margin-left: 10px;

}

.Menus-section .menus-item.cyan .icon1 {
  color: #0dcaf0;
  border: 1px solid #0dcaf0;
  background: rgba(13, 202, 240, 0.1);
}

.Menus-section .menus-item.orange .icon1 {
  color: #fd7e14;
  border: 1px solid #fd7e14;
  background: rgba(253, 126, 20, 0.1);
}

.Menus-section .menus-item.teal .icon1 {
  color: #20c997;
  border: 1px solid #20c997;
  background: rgba(32, 201, 151, 0.1);
}

.Menus-section .menus-item.red .icon1 {
  color: #df1529;
  border: 1px solid #df1529;
  background: rgba(223, 21, 4, 0.1);
}

.Menus-section .menus-item.indigo .icon1 {
  color: #6610f2;
  border: 1px solid #6610f2;
  background: rgba(102, 16, 242, 0.1);
}

.Menus-section .menus-item.pink .icon1 {
  color: #f3268c;
  border: 1px solid #f3268c;
  background: rgba(243, 38, 140, 0.1);
}

.Menus-section .menus-item:hover {
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
}

.Menus-section .menus-item:hover h3 {
  color: var(--heading-color);
}

.Menus-section .menus-item:hover p {
  color: color-mix(in srgb, var(--default-color), transparent 10%);
}
/* Responsive Styles for Images in Menus Section */
@media (max-width: 576px) {
  .Menus-section .menus-item img {
    width: 75px; /* Make images responsive */
    height: 50px; /* Maintain aspect ratio */
    max-width: 100%; /* Prevent overflow */
    margin-bottom: 10px; /* Space below images */
  }

  .Menus-section .menus-item {
    padding: 15px; /* Optional: Less padding on mobile */
  }

  .Menus-section .menus-item h3 {
    font-size: 16px; /* Adjust heading size if needed */
  }

  .Menus-section .menus-item p {
    font-size: 12px; /* Adjust paragraph size if needed */
  }

  .Menus-section .menus-item a.read-more {
    font-size: 10px; /* Adjust link size if needed */
  }
}


/*-----another menu------*/
.menus h3{
  color: var(--heading-color);

}

.menus p{
  color: var(--heading-color);
  text-align: left;
  font-style: normal;

}
.menus .row .icon-box i{
  color: var(--assent-color);
  font-size: 20px;

}
.menus h4{
  font-size: 1.1rem;
  color: var(--default-color);

}
.box-1{
  font-size: 0.9rem;
  color: var(--default-color);
  font-style: normal;
  font-weight: bold;

}

</style>
@endpush
