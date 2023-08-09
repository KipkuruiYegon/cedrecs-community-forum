{{-- The navbar is included here --}}
@include('partials.mainnavbar')

{{-- Create a post here --}}
<div class="container p-4 mt-5 mb-4" style="padding-top: 100px;">
  <div class="row">
    <div class="col-md-8 bg-light">
      <h2 class="text-center bg-info text-dark p-2 rounded-lg shadow-sm">Our Community Guidelines</h2>

      <div class="container-fluid p-3 bg-white">
        <div class="image-container">
            <img src="https://info.varonis.com/hubfs/Blog_DataBreachStatistics_BlogHero_FNL.png" alt="Welcome Image" class="img-fluid" style="width: 100%;" />

        <div style="text-align: ;" class="p-4">
            {{-- <h1>Community Guidelines for CEDRECS Cyber Breach Anonymous Sharing Forum</h1> --}}
            <p>Welcome to the CEDRECS Cyber Breach Anonymous Sharing Forum! This platform is designed to provide a safe space for individuals to share information, experiences, and insights related to cyber breaches. To ensure a positive and secure environment for all participants, we have established the following community guidelines:</p>

            <ol>
              <li><strong>Anonymous Participation:</strong> CEDRECS is an anonymous sharing forum, and we encourage users to maintain their anonymity while using the platform. Please refrain from sharing any personal identifying information about yourself or others.</li>
              <li><strong>Respect and Civility:</strong> Treat all fellow forum participants with respect and kindness. Engage in constructive discussions and avoid engaging in any form of personal attacks, harassment, or hate speech. Remember, we are all here to learn from each other and support one another.</li>
              <li><strong>Confidentiality and Non-Disclosure:</strong> The information shared on this platform should be treated with utmost confidentiality. Do not share any sensitive or classified information obtained through this forum. Respect the privacy and security of others.</li>
              <li><strong>Legal and Ethical Use:</strong> It is strictly prohibited to engage in any activity that is illegal, unethical, or in violation of applicable laws and regulations. This includes sharing or discussing methods for hacking, phishing, or any other malicious activities.</li>
              <li><strong>No Malware or Harmful Content:</strong> Do not share any files, links, or content that contains malware, viruses, or any other form of harmful software. The intention of this platform is to promote knowledge sharing, not to spread or encourage cyber threats.</li>
              <li><strong>No Spam or Advertising:</strong> Avoid spamming the forum with repetitive or irrelevant content. Do not use this platform for commercial purposes or to promote any products, services, or websites. Stay focused on the topic of cyber breaches and related discussions.</li>
              <li><strong>Report Suspicious Activity:</strong> If you encounter any suspicious or potentially harmful content or behavior on the forum, please report it to the forum moderators immediately. Together, we can maintain a secure and productive environment.</li>
              <li><strong>Moderation Decisions:</strong> The forum moderators reserve the right to enforce these guidelines and take appropriate actions, including warning, suspending, or banning users who violate them. Their decisions are final and not open to appeal.</li>
            </ol>

            <p>By participating in the CEDRECS Cyber Breach Anonymous Sharing Forum, you agree to abide by these community guidelines. Failure to comply may result in disciplinary actions or removal from the forum.</p>

            <p>Remember, the purpose of this platform is to foster knowledge sharing, mutual support, and a safe space for discussing cyber breaches. Let's work together to create a community that encourages learning, awareness, and cyber resilience.</p>

        </div>

    </div>
      </div>
    </div>

    @include('partials.sidenavbar')
  </div>
</div>

{{-- Footer is included here --}}
@include('partials.footerbar')
