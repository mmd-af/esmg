<div class="floating-chat">
    <i class="fa fa-comments" aria-hidden="true"></i>
    <div class="chat">
        <div class="header">
            <span class="title">
                از ما بپرسید؟
            </span>
            <button>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        </div>
        <div class="footer">
            <form action="" method="post">
                @csrf
                <input type="text" name="contact" class="form-control">
                <textarea name="message" class="form-control mt-3"></textarea>
                <button id="sendMessage mt-3">ارسال</button>
            </form>
            <div class="text-box" contenteditable="true" disabled="true"></div>
            <div class="text-box" contenteditable="true" disabled="true"></div>
            <div class="text-box" contenteditable="true" disabled="true"></div>

        </div>
    </div>
</div>
