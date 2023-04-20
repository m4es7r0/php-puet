<p>#1</p>

<div class="form-wrapper">
  <form id="contact-form" action="/practice/labs/lib/task-4-handler.php" method="POST">
      <!-- <label for="cf-name">Name:</label> -->
      <input 
        name="cf-name" 
        id="cf-name" 
        type="text" 
        placeholder="Name"
        required 
        minlength="2" 
        maxlength="42" 
      >

      <!-- <label for="cf-email">Email:</label> -->
      <input 
        name="cf-email" 
        id="cf-email" 
        type="email" 
        placeholder="Email"
        required 
        minlength="5" 
        maxlength="42" 
      >

      <!-- <label for="cf-message">Message:</label> -->
      <textarea 
        name="cf-message" 
        id="cf-message"
        type="text"
        placeholder="Some message" 
        maxlength="210" 
        oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>

      <button type="submit">Submit</button>
  </form>

  <div id="cf-result"></div>
</div>

  <p>#2</p>
  
<div class="form-wrapper">
    <form id="quiz-form" action="/practice/labs/lib/task-4-handler.php" method="POST">
      <section class="quiz-form-first">
        <fieldset>
          <legend>First Question</legend>
          <h3>Which of the following is used to output text in PHP?</h3>
          <ul>
            <li>
              <label>
                <input type="radio" name="qf-first-q" value="a">
                a) print
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="qf-first-q" value="b">
                b) echo
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="qf-first-q" value="c">
                c) both a and b
              </label>
            </li>
          </ul>
        </fieldset>
      </section>

      <section class="quiz-form-second">
        <fieldset>
          <legend>Second Question</legend>
          <h3>Which of the following loops in PHP will always execute at least once?</h3>
          <ul>
            <li>
              <label>
                <input type="radio" name="qf-second-q" value="a">
                a) for loop
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="qf-second-q" value="b">
                b) while loop
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="qf-second-q" value="c">
                c) do-while loop
              </label>
            </li>
          </ul>
        </fieldset>
      </section>

      <section class="quiz-form-third">
        <fieldset>
          <legend>Third Question</legend>
          <h3>Which of the following functions in PHP is used to open a file?</h3>
          <ul>
            <li>
              <label>
                <input type="radio" name="qf-third-q" value="a">
                a) fopen()
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="qf-third-q" value="b">
                b) readfile()
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="qf-third-q" value="c">
                c) fwrite()
              </label>
            </li>
          </ul>
        </fieldset>
      </section>
      
      <button type="submit">Submit</button>
    </form>

    <div id="qf-result"></div>

  </div>

  <p>#3</p>

  <div class="form-wrapper">
    <form id="file-form" action="/practice/labs/lib/task-4-handler.php" method="POST" enctype="multipart/form-data">
      <label id="file-upload">
        <input type="file" name="file" accept="image/*">
        Click to upload an image
      </label>
      <input type="submit" name="submit" value="Submit">
    </form>
    <div id="ff-result"></div>
  </div>

<script>
    // 1
    document.getElementById('contact-form').addEventListener('submit', function(evt) {
        evt.preventDefault();

        const name      = document.getElementById('cf-name').value;
        const email     = document.getElementById('cf-email').value;

        if (name && email) {
            fetch('/practice/labs/lib/task-4-handler.php', {
                method: 'POST',
                body: new FormData(evt.target),
            })
            .then(resp => resp.text())
            .then(result => {
                document.getElementById('cf-result').innerHTML = result;
            })
            .catch(err => {
                document.getElementById('cf-result').innerHTML = 'Fetch error';    
            })
        } else {
            document.getElementById('cf-result').innerHTML = 'Error';
        }
    });

    // 2
    document.getElementById('quiz-form').addEventListener('submit', function(e) {
      e.preventDefault()

      fetch('/practice/labs/lib/task-4-handler.php', {
                method: 'POST',
                body: new FormData(e.target),
      })
      .then(res => res.text())
      .then(res => {
        document.getElementById("qf-result").innerHTML = res
      })
      .catch(err => {
        document.getElementById("qf-result").innerHTML = 'Error'
      })
    });

    // TODO: 3
</script>

<?php