<?php

use Illuminate\Database\Seeder;

class AboutTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*'admin_id',
		'about_ar',
		'about_en',
		'keyword',
		'volunteer_ar',
		'volunteer_en',
		'tabara_ar',
        'tabara_en', */
        
        return \App\Model\About::create([
            'admin_id'     => 1,
            'about_ar'    => 'بشر اتفاق السلام الشامل لعام 2005 بعهد جديد في السودان، منهيا نزاعا مدنيا استمر لأكثر من 20 سنة وممهدا الطريق نحو استقلال جنوب السودان في عام 2011 بواسطة استفتاء شعبي. بيد أن السودان لا يزال يواجه عددا من التحديات في مجال حقوق الإنسان. وفي حين أنه تم تحقيق تقدم في الإصلاحات التشريعية والمؤسسية، فإن التحول الديمقراطي الشامل في السودان ظل محفوفا بالمخاطر. فثمة أجزاء من الإطار القانوني، مثل قانون الأمن الوطني والقانون الجنائي، تجور على الحقوق والحريات الأساسية. لقد تقدم العمل في تحقيق التجانس بين القوانين الوطنية والمبادئ الدولية لحقوق الإنسان، على نحو ما كان متوخيا بمقتضى اتفاق السلام، بسرعة بطيئة. ولا تزال القيود المفروضة على الحقوق المدنية والسياسية سارية. وقوبلت المطالب المتزايدة من الجماعات السياسية المعارضة ومنظمات المجتمع المدني والطلاب من أجل الإصلاحات الديمقراطية بالاعتقالات والاحتجاز من جانب قوات الأمن. ولا يزال الإفلات من العقاب بشأن انتهاكات حقوق الإنسان مشكلة متجددة',
            'about_en' => 'The 2005 Comprehensive Peace Agreement ushered in a new era in Sudan, ending a civil conflict that had lasted for more than 20 years and paving the way to South Sudan s independence in 2011 through a popular referendum. However, Sudan still faces a number of human rights challenges. While progress has been made on legislative and institutional reforms, the overall democratic transformation of Sudan remains fraught with risks. Parts of the legal framework, such as the National Security Law and the Criminal Code, violate fundamental rights and freedoms. Work to harmonize national laws with international human rights principles, as envisioned under the Peace Agreement, has progressed slowly. Restrictions on civil and political rights remain in effect. Increasing demands from political opposition groups, civil society organizations, and students for democratic reforms have met with arrests and detentions by the security forces. Impunity for human rights violations remains a recurring problem',
            'keyword' => 'حقوق السودانين بالخارج  , منظمة حقوق السودانين بالخارج لحقوق الانسان ,حقوق السودانين بالخارخ' ,
            'volunteer_ar' => 'انضم إلينا اذا لديك رغبة في خدمة حقوق السودانين بالخارج' ,
            'volunteer_en' => 'Join us if you have a desire to serve the rights of Sudanese abroad' ,
            'tabara_ar' => 'ادعماً لتستمر المنظمة في مراعاة حقوق السودانيين بالخارج' ,
            'tabara_en' => 'Support the organization to continue to respect the rights of Sudanese abroad' ,
        ]);

        
    }
}
