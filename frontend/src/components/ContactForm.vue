<template>
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form
            @submit.prevent="handleSubmit"
            class="form-contact contact_form"
            id="contactForm"
            formnovalidate
          >
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input
                    class="form-control"
                    name="phone"
                    id="phone"
                    type="text"
                    v-model="request.phone"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter phone number'"
                    placeholder="Enter phone number"
                  />
                  <div v-if="errors.phone" class="text-danger">
                    {{ errors.phone[0] }}
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input
                    class="form-control"
                    name="email"
                    type="email"
                    v-model="request.email"
                    placeholder="Email"
                  />
                  <div v-if="errors.email" class="text-danger">
                    {{ errors.email[0] }}
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input
                    class="form-control"
                    name="name"
                    type="text"
                    v-model="request.name"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Name'"
                    placeholder="Enter Name"
                  />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea
                    class="form-control w-100"
                    name="message"
                    id="message"
                    cols="30"
                    rows="9"
                    v-model="request.message"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Message'"
                    placeholder="Enter Message"
                  ></textarea>
                  <div v-if="errors.message" class="text-danger">
                    {{ errors.message[0] }}
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm boxed-btn">
                Send
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+1 253 565 2365</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      request: {
        name: "",
        phone: "",
        email: "",
        message: "",
      },
      errors: {},
    };
  },
  methods: {
    async handleSubmit() {
      try {
        const response = await axios.post(
          "http://localhost/api/user-request",
          this.request,
        );
        console.log("Success:", response.data);
        this.request = {
          name: "",
          phone: "",
          email: "",
          message: "",
        };
      } catch (error) {
        this.errors = error.response.data.errors;
      }
    },
  },
};
</script>
