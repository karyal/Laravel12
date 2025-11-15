<div>
    <h1>Compose and Send Email</h1>
    <form action="/send-email" method="post">
        @csrf
        <p><input type="text" name="to" placeholder="Enter Receiver Email"/></p>
        <p><input type="text" name="subject" placeholder="Enter Subject"/></p>
        <p>
            <textarea type="text" name="message" placeholder="Enter Message"></textarea>
        </p>
        <p><button>Send Email</button></p>
    </form>
</div>
