import jsPDF from 'jspdf';
import html2canvas from 'html2canvas';

function downloadPDF() {
    const element = document.getElementById('sectionPdf'); // تحديد العنصر المطلوب

    // استخدام html2canvas لالتقاط المحتوى
    html2canvas(element, {
        logging: false,                // منع الأخطاء في السجل
        useCORS: true,                 // معالجة مشاكل CORS للصور
        scrollY: 0,                    // ضمان أن يكون المحتوى في الأعلى
        backgroundColor: null           // الاحتفاظ بالألوان والخلفيات
    }).then((canvas) => {
        const imgData = canvas.toDataURL('image/png'); // تحويل اللوحة إلى بيانات صورة


        const pdf = new jsPDF('p', 'mm', 'a4'); // إنشاء ملف PDF جديد
        const pageWidth = pdf.internal.pageSize.getWidth();
        const pageHeight = 150;

        const imgWidth = canvas.width;
        const imgHeight = canvas.height;


        // تعديل الحجم ليكون متوافقًا مع الصفحة A4
        const widthRatio = pageWidth / imgWidth;
        const heightRatio = pageHeight / imgHeight;
        const ratio = Math.min(widthRatio, heightRatio);

        const scaledWidth = imgWidth * ratio;
        const scaledHeight = imgHeight * ratio;

        // إضافة البادينج (padding)
        const padding = 10; // المساحة البادينج المطلوبة (يمكن تعديلها حسب الحاجة)
        const x = padding;
        const y = (pageHeight - scaledHeight) / 2;

        // تعديل الموقع ليشمل البادينج
        pdf.addImage(imgData, 'PNG', x, y, scaledWidth - 2 * padding, scaledHeight);

        // حفظ PDF
        pdf.save('section.pdf');
    }).catch((error) => {
        console.error('خطأ في إنشاء PDF:', error);
    });
}

// ربط الوظيفة بزر
document.getElementById('download-pdf').addEventListener('click', downloadPDF);
