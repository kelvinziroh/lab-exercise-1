<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Chats</title>
</head>
<body>
    <div class="container">
        <div class="side-nav-bar">
            <ul class="chat-side-nav">
                <li id="create-chat"><i class="fa fa-pencil side-nav" aria-hidden="true"></i>Create New</li>
                <li class="side-links"><a href=""><i class="fa fa-signal side-nav" aria-hidden="true"></i>Dashboard</a></li>
                <li class="side-links"><a href=""><i class="fa fa-user side-nav" aria-hidden="true"></i>Your Profile</a></li>
                <li class="side-links" style="background-color: rgba(0, 255, 255, 0.2);"><a href="" style="color: #00ffff;"><i class="fa fa-comments side-nav" aria-hidden="true"></i>Chat</a></li>
                <li class="side-links"><a href=""><i class="fa fa-globe side-nav" aria-hidden="true"></i>Help Center</a></li>
                <li class="side-links cog"><a href=""><i class="fa fa-cog side-nav" aria-hidden="true"></i>Settings</a></li>
                <li class="side-links"><a href=""><i class="fa fa-sign-out side-nav" aria-hidden="true"></i>Logout</a></li>
            </ul>   
        </div>
        <div class="main" style="width: 83%;">
            <div class="top-nav" style="border-bottom: 1px solid rgba(192, 192, 192, 0.2);">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" placeholder="Search" class="search-bar">
                <ul class="chat-top-nav">
                    <li class="top-links"><a href="">Home</a></li>
                    <li class="top-links"><a href="">Chats</a></li>
                    <li class="top-links"><a href="">About Us</a></li>
                </ul>
                <img src="https://picsum.photos/id/237/75/30" alt="User Profile" class="session-profile">
            </div>

            <div class="chat-area" style="height: 636px;">
                <div class="topics-bar">
                    <h3 style="padding: 5px; padding-left: 15px;">Topics</h3>
                    <p class="topic">pharetra</p>
                    <p class="topic">sit amet</p>
                    <p class="topic">rhoncus dolor purus</p>
                </div>
                <div class="chat-view">
                    <ul class="chat-links">
                        <li>All messages</li>
                        <li>Archive</li>
                        <li>Deleted</li>
                    </ul>
                    <div class="text-box" style="padding: 10px; height: 465px;">
                        <p class="receiver">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="sender">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="receiver">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="text-area">
                        <input style="padding: 15px; width: 500px; border-radius: 25px; border: none;"type="text" placeholder="Write a message">
                        <input style="width: 100px; height: 40px; font-size: 15px; border-radius: 25px; border: none; margin-left: 12px; color: white; background-color: rgba(22, 180, 180);" type="button" value="Send">
                    </div>    
                </div>
            </div>
        </div>
    </div>   
</body>
</html>