<!-- Floating Call & WhatsApp Buttons -->
<div class="floating-contact">
  <a href="tel:+917352447232" class="call-btn" title="Call Us">
    <span class="contact-label">+91 73524 47232</span>
    <img src="<?= $base_url ?>assets/images/others/call.jpg" alt="Call Us">
  </a>

  <a href="https://api.whatsapp.com/send?phone=917352447232&text=Hello%20Swetank%20Nasha%20Mukti%20Kendra" class="whatsapp-btn" target="_blank" title="Chat on WhatsApp">
    <span class="contact-label">Chat on WhatsApp</span>
    <img src="<?= $base_url ?>assets/images/others/whatsapp.jpg" alt="Chat on WhatsApp">
  </a>
</div>



<style>
   /* Floating Contact Buttons */
.floating-contact {
  position: fixed;
  right: 20px;
  bottom: 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-end; /* Align to the right */
  gap: 12px;
  z-index: 9999;
}

.floating-contact a {
  display: flex;
  align-items: center;
  text-decoration: none;
  gap: 10px;
}

.contact-label {
  background: white;
  color: #333;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 700;
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  white-space: nowrap;
}

.floating-contact a img {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.floating-contact a img:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
}

@media (max-width: 768px) {
  .contact-label {
    font-size: 11px;
    padding: 3px 8px;
  }
}
</style>