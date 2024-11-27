<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Landig Page</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <header class="header py-3">
  <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
      <img src="logomain.png" alt="ITTECH Logo" class="img-fluid" style="max-height: 50px;">
    </div>
    <div class="admin-login">
    <a href="login.php">
        <img src="images/admin.png" alt="Admin Login" style="width: 40px; height: 40px; cursor: pointer;">
    </a>
</div>
  </div>
</header>
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-7 content-section">
        <img src="images/hero-image.jpg" alt="Landing Image" class="img-fluid mb-4">
        <h1 class="heading mb-3">
          AI-Powered Service Excellence:<br>
          Business transformation from the field to the contact centre
        </h1>
        <p class="lead">
          Empower your service teams with AI tools that help exceed customer expectations – whether in the field or in contact centres – and foster long-lasting relationships.
        </p>
        <p>Read this e-book to explore:</p>
        <ul>
          <li>Valuable insights into the specific AI tools and strategies that help teams improve service operations.</li>
          <li>Real-world case studies that highlight the benefits of integrating AI in service, such as enhanced operation efficiency and customer engagement.</li>
          <li>Practical knowledge that helps you adopt AI technology and drive innovation across your service teams.</li>
        </ul>
      </div>
      <div class="col-md-5 form-section">
        <div class="form-container p-4 ">
          <h2 class="form-header  mb-4">Request the e-book now</h2>
          <p class="">Tell us a little more about yourself:</p>
          <form action="submit_request.php" method="POST" id="landing-form" onsubmit="return validateForm(event)">
            <div class="mb-3">
              <input type="text" name="fname" class="form-control" id="firstName" placeholder="First name" required>
            </div>
            <div class="mb-3">
              <input type="text" name="lname" class="form-control" id="lastName" placeholder="Last name" required>
            </div>
            <div class="mb-3">
              <input type="email" name="work_mail" class="form-control" id="workEmail" placeholder="Work email" required>
            </div>
            <div class="mb-3">
              <input type="text" name="com_name" class="form-control" id="companyName" placeholder="Company name" required>
            </div>
            <div class="mb-3">
              <select id="companySize" name="com_size" class="form-select" required>
                <option value="">Company size*</option>
                <option value="1-50">1-50</option>
                <option value="51-200">51-200</option>
                <option value="201-500">201-500</option>
                <option value="501+">501+</option>
              </select>
            </div>
            <div class="mb-3">
              <select id="jobRole" name="job_role" class="form-select" required>
                <option value="">Job Role*</option>
                <option value="Developer">Developer</option>
                <option value="Designer">Designer</option>
                <option value="Manager">Manager</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="mb-3">
              <select id="department" name="department" class="form-select" required>
                <option value="">Department*</option>
                <option value="IT">IT</option>
                <option value="HR">HR</option>
                <option value="Finance">Finance</option>
                <option value="Sales">Sales</option>
              </select>
            </div>
            <div class="row mb-3">
              <div class="col-4">
                <select id="countryCode" name="country_code" class="form-select" required>
                <option value="">Country Code*</option>
                  <option value="+1">+1 (USA)</option>
                  <option value="+91">+91 (India)</option>
                  <option value="+44">+44 (UK)</option>
                  <option value="+61">+61 (Australia)</option>
                </select>
              </div>
              <div class="col-8">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone number" required>
              </div>
            </div>
            <div class="mb-3">
              <select id="country" name="country" class="form-select" required>
                <option value="">Country*</option>
                <option value="USA">United States</option>
                <option value="India">India</option>
                <option value="UK">United Kingdom</option>
                <option value="Australia">Australia</option>
              </select>
            </div>
            <div class="form-check mb-3">
              <input type="checkbox" name="checkbox" class="form-check-input" id="termsCheckbox">
              <label class="form-check-label" for="termsCheckbox">I agree to the terms and conditions</label>
            </div>
            <button type="submit"  class="btn btn-dark w-100">Request the e-book now</button>
            
              <small class="text-req">* Please complete the required fields</small>
          </form>
        </div>
      </div>
    </div>
    <footer class="text-center mt-5">
      <p>Copyright © 2024 ITTECH News</p>
      <a href="#" class="text-secondary">Privacy Policy</a>
    </footer>
  </div>
</body>
</html>
