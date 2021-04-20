<style>
    .membership{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-color: rgb(245, 235, 220);
    }
    .membership h2{
        font-family: Flame, "Cooper Black", "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: rgb(43, 2, 0);
        font-size: 20px;
        text-align: center;
        text-transform: capitalize;
        margin-bottom: 2rem;
    }
    .membership .main_box{
        width: 100%;
        height: auto;
        border: none;
        border-radius:10px ;
        padding: 1rem;
        background-color: transparent;
        box-shadow: rgb(73 73 73 / 20%) 0px 0px 4px 0px;
    }
    .membership .main_box input[type="text"], input[type="email"], input[type="number"], input[type="file"], input[type="password"], textarea{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid  rgb(43, 2, 0);
        padding-left: 1rem;
        color:  rgb(43, 2, 0);
        background-color: transparent;
        outline: none;
        margin-bottom: 1rem;
    }
    .membership .main_box button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: none;
        outline: none;
        background-color: #da3028;
        
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        transition: .5s;
    }
    .membership .main_box button:hover{
        background-color: rgb(43, 2, 0);
        border-radius: 10px;
    }
    @media only screen and (max-width: 600px) {
        .membership .main_box{
        box-shadow: none;
    }
    }
</style>
<div class="membership">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Become A Member Of Burger Horbour and Get Discount On Your Order</h2>
            <div class="main_box">
                <input type="text" placeholder="Enter Your Name">
                <input type="email" name="" placeholder="Enter Your Email">
                <input type="number" name="" placeholder="Enter Your Number">
                <input type="file" name="" placeholder="Upload Your Image">
                <textarea name="" placeholder="Enter Your Address" cols="30" rows="5"></textarea>
                <input type="password" name="" placeholder="Enter Password">
                <button>Get Membership</button>
            </div>
        </div>
    </div>
</div>