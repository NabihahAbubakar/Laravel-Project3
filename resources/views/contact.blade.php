@extends('layout.main')
@section('contact')
    
<div class="cupcake"> 
    <img src="/img/cup.png" alt="cupcake">
    
</div>

<div class="container">
    <h2>Contact Us</h2>
    <form action="{{url('/')}}/form" method="post">
        @csrf
        <div class="input-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        {{-- Task 2.1 (Array/foreach--}}
        <label for="option">Select your city</label>
        <div class="input-group">
        @php
        $cities = ["Karachi", "Lahore", "Faisalabad", "Rawalpindi", "Islamabad", "Multan", "Gujranwala", "Hyderabad", "Peshawar", "Quetta", "Sialkot", "Bahawalpur", "Sargodha", "Larkana", "Gujrat", "Kasur", "Rahim Yar Khan", "Sahiwal", "Jhang", "Sheikhupura", "Mardan", "Mingora", "Chiniot", "Kamoke", "Mandi Bahauddin", "Hafizabad", "Attock", "Sukkur", "Chakwal"]  
      @endphp
      <select>
          @foreach($cities as $city)
          <option>
              <h1>{{$city}}</h1>
          </option>
          @endforeach
      </select>
    </div>
        <div class="input-group">
            <button type="submit" class="btn">Submit</button>
        </div>
         
        {{-- Task 2 --}}
                  @if($email == "@")
                    <div class="equal">
                        &check; your message has been sent 
                    </div>
                    @elseif($email=="")
                    <div class="null">
                         Please enter your email &#33;
                    </div>
                    @else
                    <div class="wrong">
                       please enter a valid email address &#33;
                    </div>
                    @endif 
        
    </form>
</div>











@endsection