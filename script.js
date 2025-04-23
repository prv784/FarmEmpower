// Mobile menu functionality
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.createElement('div');
mobileMenu.className = 'mobile-menu';
mobileMenu.innerHTML = `
    <a href="#home"><i class="fas fa-home mr-2"></i>Home</a>
    <a href="#services"><i class="fas fa-tools mr-2"></i>Services</a>
    <a href="#about"><i class="fas fa-info-circle mr-2"></i>About</a>
    <a href="#team"><i class="fas fa-users mr-2"></i>Our Team</a>
    <a href="#contact"><i class="fas fa-envelope mr-2"></i>Contact</a>
    <div class="mt-4 pt-4 border-t border-gray-700">
        <div class="text-center mb-2 text-gray-400">Select Language</div>
        <div class="flex flex-col space-y-2">
            <a href="#" class="text-center" data-lang="en">English</a>
            <a href="#" class="text-center" data-lang="hi">हिंदी (Hindi)</a>
            <a href="#" class="text-center" data-lang="pa">ਪੰਜਾਬੀ (Punjabi)</a>
            <a href="#" class="text-center" data-lang="ta">தமிழ் (Tamil)</a>
            <a href="#" class="text-center" data-lang="te">తెలుగు (Telugu)</a>
        </div>
    </div>
`;
document.body.appendChild(mobileMenu);

menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
});

// Close mobile menu when clicking a link
mobileMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
    });
});

// Language translation functionality
const translations = {
    en: {
        home: "Home",
        services: "Services",
        about: "About",
        team: "Our Team",
        contact: "Contact",
        heroTitle: "Empowering Farmers for a Better Tomorrow",
        heroSubtitle: "Supporting sustainable agriculture and rural development",
        getStarted: "Get Started",
        servicesTitle: "Our Services",
        servicesSubtitle: "We provide comprehensive support to farmers through various services designed to enhance productivity and sustainability.",
        modernFarming: "Modern Farming Techniques",
        modernFarmingDesc: "Learn about the latest agricultural practices and technologies to improve your yield",
        financialSupport: "Financial Support",
        financialSupportDesc: "Access to loans and financial resources for farmers to grow their business",
        trainingPrograms: "Training Programs",
        trainingProgramsDesc: "Comprehensive training in sustainable farming practices and modern techniques",
        marketAccess: "Market Access",
        marketAccessDesc: "Direct connections to buyers and marketplaces for better prices and reach",
        aboutTitle: "About Our Mission",
        aboutDesc1: "We are dedicated to empowering farmers through education, resources, and support. Our goal is to create sustainable agricultural practices that benefit both farmers and the environment.",
        aboutDesc2: "Join us in our mission to transform agriculture and build a better future for farming communities.",
        contactTitle: "Contact Us",
        name: "Name",
        email: "Email",
        message: "Message",
        sendMessage: "Send Message",
        footer: "© 2024 FarmEmpower. All rights reserved."
    },
    hi: {
        home: "होम",
        services: "सेवाएं",
        about: "हमारे बारे में",
        team: "हमारी टीम",
        contact: "संपर्क",
        heroTitle: "आधुनिक कृषि तकनीकें",
        heroSubtitle: "नवीनतम कृषि नवाचारों और टिकाऊ कृषि प्रथाओं की खोज करें",
        getStarted: "शुरू करें",
        servicesTitle: "हमारी सेवाएं",
        servicesSubtitle: "हम उत्पादकता और स्थिरता को बढ़ाने के लिए डिज़ाइन की गई विभिन्न सेवाओं के माध्यम से किसानों को व्यापक समर्थन प्रदान करते हैं।",
        modernFarming: "आधुनिक कृषि तकनीकें",
        modernFarmingDesc: "अपनी उपज में सुधार के लिए नवीनतम कृषि प्रथाओं और तकनीकों के बारे में जानें",
        financialSupport: "वित्तीय सहायता",
        financialSupportDesc: "किसानों के लिए ऋण और वित्तीय संसाधनों तक पहुंच",
        trainingPrograms: "प्रशिक्षण कार्यक्रम",
        trainingProgramsDesc: "टिकाऊ कृषि प्रथाओं और आधुनिक तकनीकों में व्यापक प्रशिक्षण",
        marketAccess: "बाजार पहुंच",
        marketAccessDesc: "बेहतर कीमतों और पहुंच के लिए खरीदारों और बाजारों से सीधे कनेक्शन",
        aboutTitle: "हमारे मिशन के बारे में",
        aboutDesc1: "हम शिक्षा, संसाधनों और समर्थन के माध्यम से किसानों को सशक्त बनाने के लिए समर्पित हैं। हमारा लक्ष्य टिकाऊ कृषि प्रथाओं को बनाना है जो किसानों और पर्यावरण दोनों को लाभान्वित करते हैं।",
        aboutDesc2: "कृषि को बदलने और कृषि समुदायों के लिए एक बेहतर भविष्य बनाने के हमारे मिशन में शामिल हों।",
        contactTitle: "संपर्क करें",
        name: "नाम",
        email: "ईमेल",
        message: "संदेश",
        sendMessage: "संदेश भेजें",
        footer: "© 2024 फार्मएम्पावर। सर्वाधिकार सुरक्षित।"
    },
    pa: {
        home: "ਹੋਮ",
        services: "ਸੇਵਾਵਾਂ",
        about: "ਸਾਡੇ ਬਾਰੇ",
        team: "ਸਾਡੀ ਟੀਮ",
        contact: "ਸੰਪਰਕ",
        heroTitle: "ਆਧੁਨਿਕ ਖੇਤੀ ਤਕਨੀਕਾਂ",
        heroSubtitle: "ਨਵੀਨਤਮ ਖੇਤੀ ਨਵੀਨਤਾਵਾਂ ਅਤੇ ਟਿਕਾਊ ਖੇਤੀ ਪ੍ਰਥਾਵਾਂ ਦੀ ਖੋਜ ਕਰੋ",
        getStarted: "ਸ਼ੁਰੂ ਕਰੋ",
        servicesTitle: "ਸਾਡੀਆਂ ਸੇਵਾਵਾਂ",
        servicesSubtitle: "ਅਸੀਂ ਉਤਪਾਦਕਤਾ ਅਤੇ ਟਿਕਾਊਪਣ ਨੂੰ ਵਧਾਉਣ ਲਈ ਤਿਆਰ ਕੀਤੀਆਂ ਵੱਖ-ਵੱਖ ਸੇਵਾਵਾਂ ਦੇ ਮਾਧਿਅਮ ਨਾਲ ਕਿਸਾਨਾਂ ਨੂੰ ਵਿਆਪਕ ਸਹਾਇਤਾ ਪ੍ਰਦਾਨ ਕਰਦੇ ਹਾਂ।",
        modernFarming: "ਆਧੁਨਿਕ ਖੇਤੀ ਤਕਨੀਕਾਂ",
        modernFarmingDesc: "ਆਪਣੀ ਫਸਲ ਨੂੰ ਬਿਹਤਰ ਬਣਾਉਣ ਲਈ ਨਵੀਨਤਮ ਖੇਤੀ ਪ੍ਰਥਾਵਾਂ ਅਤੇ ਤਕਨੀਕਾਂ ਬਾਰੇ ਜਾਣੋ",
        financialSupport: "ਵਿੱਤੀ ਸਹਾਇਤਾ",
        financialSupportDesc: "ਕਿਸਾਨਾਂ ਲਈ ਕਰਜ਼ ਅਤੇ ਵਿੱਤੀ ਸਰੋਤਾਂ ਤੱਕ ਪਹੁੰਚ",
        trainingPrograms: "ਪ੍ਰਸ਼ਿਕਸ਼ਣ ਪ੍ਰੋਗਰਾਮ",
        trainingProgramsDesc: "ਟਿਕਾਊ ਖੇਤੀ ਪ੍ਰਥਾਵਾਂ ਅਤੇ ਆਧੁਨਿਕ ਤਕਨੀਕਾਂ ਵਿੱਚ ਵਿਆਪਕ ਪ੍ਰਸ਼ਿਕਸ਼ਣ",
        marketAccess: "ਬਾਜ਼ਾਰ ਪਹੁੰਚ",
        marketAccessDesc: "ਬਿਹਤਰ ਕੀਮਤਾਂ ਅਤੇ ਪਹੁੰਚ ਲਈ ਖਰੀਦਦਾਰਾਂ ਅਤੇ ਬਾਜ਼ਾਰਾਂ ਨਾਲ ਸਿੱਧੇ ਕਨੈਕਸ਼ਨ",
        aboutTitle: "ਸਾਡੇ ਮਿਸ਼ਨ ਬਾਰੇ",
        aboutDesc1: "ਅਸੀਂ ਸਿੱਖਿਆ, ਸਰੋਤਾਂ ਅਤੇ ਸਹਾਇਤਾ ਦੇ ਮਾਧਿਅਮ ਨਾਲ ਕਿਸਾਨਾਂ ਨੂੰ ਸਸ਼ਕਤ ਬਣਾਉਣ ਲਈ ਸਮਰਪਿਤ ਹੋਵੋ। ਸਾਡਾ ਟੀਚਾ ਟਿਕਾਊ ਖੇਤੀਬਾੜੀ ਪ੍ਰਥਾਵਾਂ ਬਣਾਉਣਾ ਹੈ ਜੋ ਕਿਸਾਨਾਂ ਅਤੇ ਵਾਤਾਵਰਣ ਦੋਵਾਂ ਨੂੰ ਲਾਭ ਪਹੁੰਚਾਉਂਦੀਆਂ ਹਨ।",
        aboutDesc2: "ਖੇਤੀਬਾੜੀ ਨੂੰ ਬਦਲਣ ਅਤੇ ਖੇਤੀਬਾੜੀ ਸਮਾਜਾਂ ਲਈ ਇੱਕ ਬਿਹਤਰ ਭਵਿੱਖ ਬਣਾਉਣ ਦੇ ਸਾਡੇ ਮਿਸ਼ਨ ਵਿੱਚ ਸ਼ਾਮਲ ਹੋਵੋ।",
        contactTitle: "ਸੰਪਰਕ ਕਰੋ",
        name: "ਨਾਮ",
        email: "ਈਮੇਲ",
        message: "ਸੁਨੇਹਾ",
        sendMessage: "ਸੁਨੇਹਾ ਭੇਜੋ",
        footer: "© 2024 ਫਾਰਮਐਮਪਾਵਰ। ਸਾਰੇ ਅਧਿਕਾਰ ਸੁਰੱਖਿਅਤ ਹਨ।"
    },
    ta: {
        home: "முகப்பு",
        services: "சேவைகள்",
        about: "எங்களை பற்றி",
        team: "எங்கள் குழு",
        contact: "தொடர்பு",
        heroTitle: "நவீன விவசாய நுட்பங்கள்",
        heroSubtitle: "சமீபத்திய விவசாய புதுமைகள் மற்றும் நிலையான விவசாய நடைமுறைகளை கண்டறியவும்",
        getStarted: "தொடங்குங்கள்",
        servicesTitle: "எங்கள் சேவைகள்",
        servicesSubtitle: "உற்பத்தித்திறன் மற்றும் நிலையான தன்மையை மேம்படுத்த வடிவமைக்கப்பட்ட பல்வேறு சேவைகள் மூலம் விவசாயிகளுக்கு விரிவான ஆதரவை வழங்குகிறோம்.",
        modernFarming: "நவீன விவசாய நுட்பங்கள்",
        modernFarmingDesc: "உங்கள் மகசூலை மேம்படுத்த சமீபத்திய விவசாய நடைமுறைகள் மற்றும் தொழில்நுட்பங்களைப் பற்றி அறியவும்",
        financialSupport: "நிதி ஆதரவு",
        financialSupportDesc: "விவசாயிகளுக்கான கடன்கள் மற்றும் நிதி ஆதாரங்களுக்கான அணுகல்",
        trainingPrograms: "பயிற்சி திட்டங்கள்",
        trainingProgramsDesc: "நிலையான விவசாய நடைமுறைகள் மற்றும் நவீன நுட்பங்களில் விரிவான பயிற்சி",
        marketAccess: "சந்தை அணுகல்",
        marketAccessDesc: "சிறந்த விலைகள் மற்றும் அணுகலுக்கான வாங்குநர்கள் மற்றும் சந்தைகளுடன் நேரடி இணைப்புகள்",
        aboutTitle: "எங்கள் நோக்கம் பற்றி",
        aboutDesc1: "கல்வி, வளங்கள் மற்றும் ஆதரவு மூலம் விவசாயிகளை அதிகாரமளிக்க நாங்கள் அர்ப்பணித்துள்ளோம். விவசாயிகள் மற்றும் சுற்றுச்சூழல் இரண்டிற்கும் பயனளிக்கும் நிலையான விவசாய நடைமுறைகளை உருவாக்குவதே எங்கள் குறிக்கோள்.",
        aboutDesc2: "விவசாயத்தை மாற்றி, விவசாய சமூகங்களுக்கு சிறந்த எதிர்காலத்தை உருவாக்க எங்கள் நோக்கில் சேரவும்.",
        contactTitle: "தொடர்பு கொள்ளவும்",
        name: "பெயர்",
        email: "மின்னஞ்சல்",
        message: "செய்தி",
        sendMessage: "செய்தி அனுப்பவும்",
        footer: "© 2024 ஃபார்ம்எம்பவர். அனைத்து உரிமைகளும் பாதுகாக்கப்பட்டவை."
    },
    te: {
        home: "హోమ్",
        services: "సేవలు",
        about: "మా గురించి",
        team: "మా బృందం",
        contact: "సంప్రదించండి",
        heroTitle: "ఆధునిక వ్యవసాయ పద్ధతులు",
        heroSubtitle: "తాజా వ్యవసాయ ఆవిష్కరణలు మరియు స్థిరమైన వ్యవసాయ పద్ధతులను కనుగొనండి",
        getStarted: "ప్రారంభించండి",
        servicesTitle: "మా సేవలు",
        servicesSubtitle: "ఉత్పాదకత మరియు స్థిరత్వాన్ని పెంపొందించడానికి రూపొందించబడిన వివిధ సేవల ద్వారా రైతులకు సమగ్ర మద్దతును అందిస్తున్నాము.",
        modernFarming: "ఆధునిక వ్యవసాయ పద్ధతులు",
        modernFarmingDesc: "మీ దిగుబడిని మెరుగ్గా పెంచడానికి తాజా వ్యవసాయ పద్ధతులు మరియు సాంకేతిక పరిజ్ఞానాల గురించి తెలుసుకోండి",
        financialSupport: "ఆర్థిక మద్దతు",
        financialSupportDesc: "రైతులకు రుణాలు మరియు ఆర్థిక వనరులకు ప్రాప్యత",
        trainingPrograms: "శిక్షణ కార్యక్రమాలు",
        trainingProgramsDesc: "స్థిరమైన వ్యవసాయ పద్ధతులు మరియు ఆధునిక సాంకేతిక పరిజ్ఞానాలలో సమగ్ర శిక్షణ",
        marketAccess: "మార్కెట్ యాక్సెస్",
        marketAccessDesc: "మెరుగైన ధరలు మరియు పరిధి కోసం కొనుగోలుదారులు మరియు మార్కెట్లతో నేరుగా కనెక్షన్లు",
        aboutTitle: "మా లక్ష్యం గురించి",
        aboutDesc1: "విద్య, వనరులు మరియు మద్దతు ద్వారా రైతులను శక్తివంతం చేయడానికి మేము అంకితం చేసినాము. రైతులు మరియు పర్యావరణం రెండింటికీ ప్రయోజనం చేకూర్చే స్థిరమైన వ్యవసాయ పద్ధతులను సృష్టించడం మా లక్ష్యం.",
        aboutDesc2: "వ్యవసాయాన్ని మార్చి, వ్యవసాయ సమాజాల కోసం మెరుగైన భవిష్యత్తును నిర్మించడానికి మా లక్ష్యంలో చేరండి.",
        contactTitle: "సంప్రదించండి",
        name: "పేరు",
        email: "ఇమెయిల్",
        message: "సందేశం",
        sendMessage: "సందేశం పంపండి",
        footer: "© 2024 ఫార్మ్‌ఎంపవర్. అన్ని హక్కులు ప్రత్యేకించబడ్డాయి."
    }
};

// Function to change language
function changeLanguage(lang) {
    // Update current language display
    document.getElementById('current-language').textContent = 
        lang === 'en' ? 'English' : 
        lang === 'hi' ? 'हिंदी' : 
        lang === 'pa' ? 'ਪੰਜਾਬੀ' : 
        lang === 'ta' ? 'தமிழ்' : 
        'తెలుగు';
    
    // Update all translatable elements
    document.querySelector('a[href="#home"] span').textContent = translations[lang].home;
    document.querySelector('a[href="#services"] span').textContent = translations[lang].services;
    document.querySelector('a[href="#about"] span').textContent = translations[lang].about;
    document.querySelector('a[href="#team"] span').textContent = translations[lang].team;
    document.querySelector('a[href="#contact"] span').textContent = translations[lang].contact;
    
    document.querySelector('#home h1').textContent = translations[lang].heroTitle;
    document.querySelector('#home p').textContent = translations[lang].heroSubtitle;
    document.querySelector('#home button').textContent = translations[lang].getStarted;
    
    document.querySelector('#services h2').textContent = translations[lang].servicesTitle;
    document.querySelector('#services p').textContent = translations[lang].servicesSubtitle;
    
    // Update service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards[0].querySelector('h3').textContent = translations[lang].modernFarming;
    serviceCards[0].querySelector('p').textContent = translations[lang].modernFarmingDesc;
    serviceCards[1].querySelector('h3').textContent = translations[lang].financialSupport;
    serviceCards[1].querySelector('p').textContent = translations[lang].financialSupportDesc;
    serviceCards[2].querySelector('h3').textContent = translations[lang].trainingPrograms;
    serviceCards[2].querySelector('p').textContent = translations[lang].trainingProgramsDesc;
    serviceCards[3].querySelector('h3').textContent = translations[lang].marketAccess;
    serviceCards[3].querySelector('p').textContent = translations[lang].marketAccessDesc;
    
    document.querySelector('#about h2').textContent = translations[lang].aboutTitle;
    const aboutParagraphs = document.querySelectorAll('#about p');
    aboutParagraphs[0].textContent = translations[lang].aboutDesc1;
    aboutParagraphs[1].textContent = translations[lang].aboutDesc2;
    
    document.querySelector('#contact h2').textContent = translations[lang].contactTitle;
    document.querySelector('label[for="name"]').textContent = translations[lang].name;
    document.querySelector('label[for="email"]').textContent = translations[lang].email;
    document.querySelector('label[for="message"]').textContent = translations[lang].message;
    document.querySelector('#contact button').textContent = translations[lang].sendMessage;
    
    document.querySelector('footer p').textContent = translations[lang].footer;
    
    // Update mobile menu
    const mobileLinks = mobileMenu.querySelectorAll('a[href^="#"]');
    mobileLinks[0].textContent = translations[lang].home;
    mobileLinks[1].textContent = translations[lang].services;
    mobileLinks[2].textContent = translations[lang].about;
    mobileLinks[3].textContent = translations[lang].team;
    mobileLinks[4].textContent = translations[lang].contact;
    
    // Save language preference
    localStorage.setItem('preferred-language', lang);
}

// Add event listeners to language links
document.querySelectorAll('a[data-lang]').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const lang = e.target.getAttribute('data-lang');
        changeLanguage(lang);
    });
});

// Load preferred language from localStorage
document.addEventListener('DOMContentLoaded', () => {
    const preferredLanguage = localStorage.getItem('preferred-language') || 'en';
    changeLanguage(preferredLanguage);
});

// Form submission handling
const contactForm = document.getElementById('contact-form');
contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(contactForm);
    const data = Object.fromEntries(formData);
    
    // Here you would typically send the data to a server
    console.log('Form submitted:', data);
    
    // Show success message
    alert('Thank you for your message! We will get back to you soon.');
    contactForm.reset();
});

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add animation to service cards
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-5px)';
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
    });
}); 