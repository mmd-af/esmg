<div class="floating-chat">
    <i class="fa fa-comments" aria-hidden="true"></i>
    <div class="chat">
        <div class="header">
            <span class="title">
               ما اینجا هستیم
            </span>
            <button id="closeChat">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        </div>
        <ul class="messages">
            <li class="other">پیام خود برای ما ارسال کنید</li>
        </ul>
        <form action="" method="post">
            @csrf
            <input class="form-control" placeholder="شماره تماس" type="text" name="phone">
            <textarea class="form-control mt-3" name="description" placeholder="پیام" rows="5"></textarea>
            <button type="submit" class="btn btn-primary mt-2 btn-submit">ارسال</button>
        </form>
        <div class="footer">
            <div class="text-box" contenteditable="true" disabled="true" style="display: none"></div>
        </div>
    </div>
</div>
