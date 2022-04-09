<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Landscape',
                'slug' => 'landscape',
                'description' => 'Flowerbads, Retaining wall, Sod, Weed Control',
            'html' => '<p style="margin-left:.5em; margin-right:.5em; text-align:start"><strong>Landscape maintenance</strong>&nbsp;(or&nbsp;<strong>groundskeeping</strong>) is the art and vocation of keeping a landscape healthy, clean, safe and attractive, typically in a&nbsp;<a class="mw-redirect" href="https://en.wikipedia.org/wiki/Residential_garden" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Residential garden">garden</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Yard_(land)" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Yard (land)">yard</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Park" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Park">park</a>, institutional setting or&nbsp;<a class="mw-redirect" href="https://en.wikipedia.org/wiki/Estate_(house)" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Estate (house)">estate</a>. Using&nbsp;<a href="https://en.wikipedia.org/wiki/Garden_tool" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Garden tool">tools</a>, supplies, knowledge, physical exertion and skills, a&nbsp;<a class="mw-redirect" href="https://en.wikipedia.org/wiki/Groundskeeper" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Groundskeeper">groundskeeper</a>&nbsp;may plan or carry out annual plantings and harvestings, periodic weeding and fertilizing, other&nbsp;<a href="https://en.wikipedia.org/wiki/Gardening" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Gardening">gardening</a>, lawn care,&nbsp;<a href="https://en.wikipedia.org/wiki/Snow_removal" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Snow removal">snow removal</a>, driveway and path maintenance, shrub&nbsp;<a href="https://en.wikipedia.org/wiki/Pruning" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Pruning">pruning</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Topiary" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Topiary">topiary</a>, lighting,&nbsp;<a href="https://en.wikipedia.org/wiki/Fence" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Fence">fencing</a>, swimming pool care, runoff drainage, and&nbsp;<a href="https://en.wikipedia.org/wiki/Irrigation" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Irrigation">irrigation</a>, and other jobs for protecting and improving the&nbsp;<a href="https://en.wikipedia.org/wiki/Topsoil" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="">topsoil</a>,&nbsp;<a class="mw-redirect" href="https://en.wikipedia.org/wiki/Plants" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Plants">plants</a>, and garden accessories.</p>

<p style="margin-left:.5em; margin-right:.5em; text-align:start">Groundskeepers may also deal with local animals (including birds, rodents, reptiles, insects, and domestic animals or&nbsp;<a href="https://en.wikipedia.org/wiki/Pet" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Pet">pets</a>), and create means to attract or repel them, as desired or necessary. A garden may also be designed to include exotic animals, such as a&nbsp;<a href="https://en.wikipedia.org/wiki/Koi_pond" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Koi pond">koi pond</a>. In larger estates, groundskeepers may be responsible for providing and maintaining habitat for wild animals.</p>

<h2 style="font-style:normal; margin-left:.25em; margin-right:0; text-align:start">Landscape maintenance industry<span style="font-family:sans-serif; font-size:small"><span style="color:#54595d">[</span><a href="https://en.wikipedia.org/w/index.php?title=Landscape_maintenance&amp;action=edit&amp;section=1" style="text-decoration: none; color: rgb(6, 69, 173); background: none; white-space: nowrap;" title="Edit section: Landscape maintenance industry">edit</a><span style="color:#54595d">]</span></span></h2>

<p style="margin-left:.5em; margin-right:.5em; text-align:start">According to IBISWorld, who published an article in September of 2019 on the Landscape Industry in the US, the Landscaping Industry is worth $98.8 billion. From 2014-2019, the industry had an annual growth of 4.4%, but it is estimated that from 2019- 2024 the industry will decrease to only a 1.5&nbsp;% annual growth. The Industry is suspected to have a 1.2% growth in the number or businesses and low entry barriers for new companies. Due to the continuous and stead growth of this industry, competition for new businesses is high.&nbsp;<sup><a href="https://en.wikipedia.org/wiki/Landscape_maintenance#cite_note-1" style="text-decoration: none; color: rgb(6, 69, 173); background: none;">[1]</a></sup></p>

<p style="margin-left:.5em; margin-right:.5em; text-align:start">In May of 2017, the U.S Bureau of Labor Statistics ( BLS ), estimated that 912,360 &quot;Landscape and Groundskeeping Workers&quot; maintained jobs under this job title. These workers have an average annual pay of $29,700 paired with an mean hourly wage of about $14.28. These jobs hold a variety of hourly rates ranging from $9.59, which equals an annual pay of $19,960 a year, to $20.61, which holds an annual pay of $42,870.&nbsp;<sup><a href="https://en.wikipedia.org/wiki/Landscape_maintenance#cite_note-2" style="text-decoration: none; color: rgb(6, 69, 173); background: none;">[2]</a></sup>The exact description of this job can change solely based on the company that has posted the job description, but according to the BLS, &quot; Landscape or maintain grounds of property using hand or power tools or equipment. Workers typically perform a variety of tasks, which may include any combination of the following: sod laying, mowing, trimming, planting, watering, fertilizing, digging, raking, sprinkler installation, and installation of mortarless segmental concrete masonry wall units.&quot; The BLS also claims that this job title excludes &quot;Farmworkers and Laborers, Crop, Nursery, and Greenhouse (45-2092).&quot;</p>

<p style="margin-left:.5em; margin-right:.5em; text-align:start">Demand for landscaping and pool installation work increased during the&nbsp;<a href="https://en.wikipedia.org/wiki/COVID-19_pandemic" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="COVID-19 pandemic">COVID-19 pandemic</a>&nbsp;due to the increased number of&nbsp;<a href="https://en.wikipedia.org/wiki/Remote_work" style="text-decoration: none; color: rgb(6, 69, 173); background: none;" title="Remote work">remote workers</a>&nbsp;spending time in their homes.</p>',
                'is_active' => 1,
                'created_at' => '2022-03-18 18:57:51',
                'updated_at' => '2022-03-19 20:42:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Irrigation',
                'slug' => 'irrigation',
                'description' => NULL,
                'html' => NULL,
                'is_active' => 1,
                'created_at' => '2022-03-18 18:58:06',
                'updated_at' => '2022-03-18 22:26:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Concrete Jobs',
                'slug' => 'concrete-jobs',
                'description' => NULL,
                'html' => NULL,
                'is_active' => 1,
                'created_at' => '2022-03-18 18:58:24',
                'updated_at' => '2022-03-18 22:27:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Retaining Wall',
                'slug' => 'retaining-wall',
                'description' => NULL,
                'html' => NULL,
                'is_active' => 1,
                'created_at' => '2022-04-08 02:35:59',
                'updated_at' => '2022-04-08 02:35:59',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'French Drains',
                'slug' => 'french-drains',
                'description' => NULL,
                'html' => NULL,
                'is_active' => 1,
                'created_at' => '2022-04-08 16:28:45',
                'updated_at' => '2022-04-08 16:28:45',
            ),
        ));
        
        
    }
}