<?php include('inc/header.php');
//check user is login or not
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
?>
      <!----- main contant -----> 
       <div class="main-contant">
             <div class="page-title">
               <h2>Info</h2>
           </div> 
           <div class="col-md-10 offset-md-1">
               <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">যারা টাকা উত্তোলনের পিনকোড পাননি তারা ফোন দিয়ে আপনার পিন কোড জেনে নিতে পারেন।অথবা আপনার ইউজারনেম লিখে এসএমএস দিন।</li>
                <li class="list-group-item">আপনার অ্যাকাউন্টের পাসওয়ার্ড এবং পিন নাম্বার কারো সাথে শেয়ার করবেন না।</li>
                <li class="list-group-item">একাউন্ট খোলার সময় খেয়াল রাখবেন ওই নামে যদি আগে থেকে অ্যাকাউন্ট থাকে তাহলে আপনাকে নতুন একাউন্ট খুলতে দেবে না।</li>
                <li class="list-group-item">কোন প্রোডাক্টে কিনে ফেললে তা ক্যানসেল করতে পারবেন না। আপনি চাইলে তার বিপরীতে ক্লিক করে নিতে পারেন।</li>
                <li class="list-group-item">কোন মিসটেক অবস্থায় প্রোডাক্ট কিনলে তা ক্যান্সেল হয়ে যাবে। কোন মিসটেক দেখলে দয়াকরে এসএমএস দেবেন।</li>
                <li class="list-group-item">আপনার উইন টাকার দুই শতাংশ এবং ড্র এর জন্য এক শতাংশ কমিশন নেওয়া হয়।</li>
                <li class="list-group-item">টাকা যোগ করুন এবং টাকা উত্তোলন সকাল 10 টা থেকে শুরু হবে। টাকা উত্তোলন রাত আটটা থেকে বন্ধ হবে। টাকা যোগ করণ রাত দশটা থেকে বন্ধ হবে।</li>
                <li class="list-group-item">Number List অপশনে গিয়ে যে নাম্বারে টাকা উত্তোলন করবেন সে নাম্বার বসিয়ে অ্যাড বাটনে ক্লিক করুন। একটি একটি করে ফোন নাম্বার এড করুন। একসাথে দুইটা অ্যাড করবেন না। বিকাশ রকেট এরকম কিছু লেখার দরকার নেই।</li>
                <li class="list-group-item">আপনাদের একাউন্টের নিরাপত্তার স্বার্থে : যে সকল মোবাইল নাম্বার, ইউজার একাউন্ট নেইম, ব্যাংক অ্যাকাউন্ট নাম্বার এ টাকা উত্তোলন করবেন তার একটি লিস্ট তৈরি করে ফেলুন। আমরা আপনার অনুমোদিত নাম্বার ছাড়া টাকা পাঠাবো না। অনুমোদিত নাম্বার ছাড়া টাকা উত্তোলন করলে আপনার একাউন্ট এর ফোন নাম্বার দিয়ে এসএমএস দিতে হবে অথবা ফোন দিতে হবে।</li>
                <li class="list-group-item">যাদের টাকা যোগ হচ্ছে না তারা দয়া করে টাকা পাঠানোর এস এম এস টি ফরওয়ার্ড করে দিন।</li>
                <li class="list-group-item">15-10-2018 তারিখ থেকে টাকা যোগ করতে পারবেন সর্বনিম্ন 100 টাকা প্রোডাক্ট কিনতে পারবেন সর্বনিম্ন 100 টাকা টাকা উত্তোলন করতে পারবেন সর্বনিম্ন 500 টাকা।</li>
                <li class="list-group-item">যাদের একাউন্টে ব্যালেন্স শো করতেছে না ,তারা নতুন করে লগইন করুন ছোট হাতের এবং বড় হাতের অক্ষর গুলো ঠিকভাবে লেখুন।</li>
              </ul>
           </div>
           
           </div>
       </div>
       <!-----//End main contant -----> 
       
<?php include('inc/footer.php');
}else{
    echo '<script>window.location.href = "login.php";
</script>';
}
?>