<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductsData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            //Storage
            [
                'name'=>'SanDisk Ultra® 3D SSD',
                'photo' => 'images/SSD images/ssd_img4.png',
                'price' => '3958',
                'details' => 'Form Factor: 2.5-inch

                Interface: SATA III 6Gb/s (backward compatible with SATA II)
                
                Capacity: 1TB
                
                Sequential Read Speed: Up to 560 MB/s
                
                Sequential Write Speed: Up to 530 MB/s
                
                Random Read (4KB, QD32): Up to 95,000 IOPS
                
                Random Write (4KB, QD32): Up to 84,000 IOPS
                
                NAND Type: 3D NAND TLC (Triple-Level Cell)
                
                Endurance (TBW - Terabytes Written): Varies by capacity, typically ranging from 200TBW for the 250GB model to 500TBW for the 2TB model.
                
                MTTF (Mean Time To Failure): Not specified in the general information.
                
                Form Factor: 7mm, 2.5
                
                Operating Temperature: 0°C to 70°
                
                Vibration Resistance: 5.0 gRMS, 10-2000 Hz
                
                Shock Resistance: 1500G @ 0.5ms half sine',
                'category' => 'Storage',
            ],
            [
                'name'=>"Kingston KC400 SSD",
                'photo' => 'images/SSD images/ssd_img5.png',
                'price' => '4555',
                'details' => 'Form Factor: 2.5-inch

                Interface: SATA III 6Gb/s (backward compatible with SATA II)
                
                Capacity: 1TB
                
                Sequential Read Speed: Up to 550 MB/s
                
                Sequential Write Speed: Up to 530 MB/s
                
                Random Read (4KB, QD32): Up to 99,000 IOPS
                
                Random Write (4KB, QD32): Up to 88,000 IOPS
                
                NAND Type: MLC (Multi-Level Cell) NAND flash memory
                
                Controller: Phison PS3110-S10
                
                Endurance (TBW - Terabytes Written): Varies by capacity, typically ranging from 600TBW for the 128GB model to 1,400TBW for the 1TB model.
                
                MTBF (Mean Time Between Failures): 1 million hours
                
                Form Factor: 7mm, 2.5
                
                Operating Temperature: 0°C to 70°C
                
                Shock Resistance: 1500G',
                'category' => 'Storage',
            ],
            [
                'name'=>'Barracuda Compute SSD 1TB',
                'photo' => 'images/SSD images/ssd_img8.png',
                'price' => '7303',
                'details' => 'Capacity: 1TB

                Interface: SATA III (6 Gb/s)
                
                Form Factor: 2.5-inch
                
                NAND Flash Memory Type: TLC
                
                Sequential Read Speed: Up to 560 MB/s
                
                Sequential Write Speed: Up to 540 MB/s
                
                Random Read Speed:(4KB, QD32) Up to 90,000 
                
                IOPSnRandom Write Speed: (4KB, QD32) Up to 90,000 IOPS
                
                Endurance Rating (Total Bytes Written): 600 TBW
                
                MTBF (Mean Time Between Failures) 1.8 mil',
                'category' => 'Storage',
            ],
            [
                'name'=>'Teamgroup L5 Lite 3D 1TB',
                'photo' => 'images/SSD images/ssd_img9.png',
                'price' => '5595',
                'details' => "AStorage Capacity: 1TB

                Interface: SATA III (6.0 Gb/s)
                
                Form Factor: 2.5-inch
                
                NAND Flash Memory Type: 3D NAND
                
                Sequential Read Speed: Up to 470 MB/s
                
                Sequential Write Speed: Up to 420 MB/s
                
                Random Read IOPS: Not specified (it's often in the tens of thousands)
                
                Random Write IOPS: Not specified (it's often in the tens of thousands)
                
                Endurance (TBW): The total bytes written endurance varies and is typically specified by the manufacturer.",
                'category' => 'Storage',
            ],
            [
                'name'=>'Intel 3D Nand QLC',
                'photo' => 'images/SSD images/ssd_img14.png',
                'price' => '5351',
                'details' => 'Storage Capacity: 500GB

                Form Factor: M.2 2280
                
                Interface: PCIe Gen3 x4, NVMe 1.3
                
                NAND Flash Memory Type: 3D NAND QLC (Quad-Level Cell)
                
                Sequential Read Speed: Up to 1,500 MB/s
                
                Sequential Write Speed: Up to 1,000 MB/s
                
                Random Read IOPS: Up to 90,000 IOPS (4KB, QD32)
                
                Random Write IOPS: Up to 220,000 IOPS (4KB, QD32)
                
                Endurance (TBW): The Total Bytes Written (TBW) endurance for the 500GB model is typically around 100 TBW.',
                'category' => 'Storage',
            ],
            [
                'name'=>'Kingston Technology A2000',
                'photo' => 'images/SSD images/ssd_img17.png',
                'price' => '2600',
                'details' => "Capacity: 500GB

                Form Factor: M.2 2280
                
                Interface: PCIe Gen3.0 x4, NVMe 1.3
                
                Sequential Read Speed: Up to 2,200MB/s
                
                Sequential Write Speed: Up to 2,000MB/s
                
                Random Read (IOPS): Up to 180,000 IOPS
                
                Random Write (IOPS): Up to 200,000 IOPS
                
                Endurance (TBW - Terabytes Written): Varies with capacity; typically several hundred TBW for the 500GB variant.
                
                MTBF (Mean Time Between Failures): Not always specified in every source, but it's in the range of millions of hours.
                
                Warranty: Kingston typically offers a limited 5-year warranty for their A2000 series SSDs.",
                'category' => 'Storage',
            ],
            [
                'name'=>'HP SSD EX920 m.2 516GB',
                'photo' => 'images/SSD images/ssd_img19.png',
                'price' => '4428',
                'details' => "Capacity: 500GB

                Form Factor: M.2 2280
                
                Interface: PCIe Gen3.0 x4, NVMe 1.3
                
                Sequential Read Speed: Up to 3,200MB
                
                Sequential Write Speed: Up to 1,600MB/s
                
                Random Read (IOPS): Up to 350,000 IOPS
                
                Random Write (IOPS): Up to 250,000 IOPS
                
                Endurance (TBW - Terabytes Written): Varies with capacity; typically several hundred TBW for the 500GB variant.
                
                MTBF (Mean Time Between Failures): Not always specified in every source, but SSDs generally have a high MTBF, often in the range of millions of hours.
                
                Warranty: HP usually provides a limited 5-year warranty for their high-performance SSDs.",
                'category' => 'Storage',
            ],
            [
                'name'=>'Kingston SSDNow V-Series',
                'photo' => 'images/SSD images/ssd_info5_img1.png',
                'price' => '6151',
                'details' => "Form Factor: 2.5-inch

                Interface: SATA III 6Gb/s (backward compatible with SATA II)
                
                Capacity: 1TB
                
                Sequential Read Speed: Up to 550 MB/s
                
                Sequential Write Speed: Up to 530 MB/s
                
                Random Read (4KB, QD32): Up to 99,000 IOPS
                
                Random Write (4KB, QD32): Up to 88,000 IOPS
                
                NAND Type: MLC (Multi-Level Cell) NAND flash memory
                
                Controller: Phison PS3110-S10
                
                Endurance (TBW - Terabytes Written): Varies by capacity, typically ranging from 600TBW for the 128GB model to 1,400TBW for the 1TB model.
                
                MTBF (Mean Time Between Failures): 1 million hours
                
                Form Factor: 7mm, 2.5 Operating Temperature: 0°C to 70°C
                
                Shock Resistance: 1500G",
                'category' => 'Storage',
            ],
            [
                'name'=>'HP 5MS22AAABC 512GB M.2',
                'photo' => 'images/SSD images/ssd_info7_img1.png',
                'price' => '2889',
                'details' => "Form Factor: 2.5-inch SATA III

                Capacity: 1TB
                
                Interface: SATA III (6.0 Gb/s)
                
                Controller: Phison S11
                
                NAND Flash: TLC (Triple-Level Cell)
                
                Sequential Read Speed: Up to 535 MB/s
                
                Sequential Write Speed: Up to 515 MB/s
                
                Random Read IOPS: Not always specified, but typical for SSDs, it's in the range of tens of thousands.
                
                Random Write IOPS: Not always specified, but typical for SSDs, it's in the range of tens of thousands.
                
                MTBF (Mean Time Between Failures): Not always specified, but typical for SSDs, it's in the range of millions of hours.
                
                Endurance (TBW - Terabytes Written): Varies based on capacity. For 1TB, it's typically around 100TBW.
                
                Operating Temperature: Not always specified, but typically within 0°C to 70°C.
                
                Features: TRIM Support, Wear Leveling, ECC (Error-Correcting Code), S.M.A.R.T. Support etc.",
                'category' => 'Storage',
            ],
            [
                'name'=>'PNY CS900 SSD 1TB',
                'photo' => 'images/SSD images/ssd_info19_img2.png',
                'price' => '6151',
                'details' => "Capacity: 512GB

                Form Factor: M.2 2280
                
                Interface: PCIe Gen3.0 x4, NVMe 1.3
                
                Sequential Read Speed: Up to 3,200MB
                
                Sequential Write Speed: Up to 1,600MB/s
                
                Random Read (IOPS): Up to 350,000 IOPS
                
                Random Write (IOPS): Up to 250,000 IOPS
                
                Endurance (TBW - Terabytes Written): Varies with capacity; typically several hundred TBW for the 500GB variant.
                
                MTBF (Mean Time Between Failures): Not always specified in every source, but SSDs generally have a high MTBF, often in the range of millions of hours.
                
                Warranty: HP usually provides a limited 5-year warranty for their high-performance SSDs.",
                'category' => 'Storage',
            ],
            //RAM
            [
                'name'=>'PNY CS900 SSD 1TB',
                'photo' => 'images/RAM images/ram/ram_img3.png',
                'price' => '6567',
                'details' => "Type:DDR4

                Capacity: 16GB

                Speed:Available in various speeds, typically ranging from 2400MHz to 3200MHz (XMP profiles may offer higher speeds)

                Latency (CAS Latency):Various CAS latency options, such as CL16, CL17, CL18, etc.

                Voltage:Standard DDR4 voltage is 1.2V, but some higher-performance modules may require slightly higher voltage

                Form Factor: UDIMM (Unbuffered DIMM)

                Heat Spreader: Aluminum heat spreader for improved thermal performance and aesthetics

                Color: Available in various colors, often in white, gray, red, or black

                Compatibility: Designed for compatibility with variousmotherboards and Intel/AMD platforms

                XMP Profiles: Many Crucial Ballistix Sport LT modules support XMP (Extreme Memory Profile) for easy overclockingand performance tuning.

                Configuration: Available in single modules or kits with multiple modules for dual-channel, quad-channel, or even higher configurations.",
                'category' => 'RAM',
            ],
            [
                'name'=>'Patriot Viper Steel DDR4 64GB 3600MHz Module',
                'photo' => 'images/RAM images/ram/ram_img7.png',
                'price' => '9319',
                'details' => "Capacity: 64GB (2 x 32GB)

                Clock Speed: 3600 MHz

                Pin Type: 288-Pin UDIMM

                Voltage: 1.35V

                Timing: 20-26-26-46

                Type: Unbuffered, Non-ECC

                XMP: XMP 2.0 Support

                Lighting: RGB Lighting
                
                Heatsink Aluminum Heatsink",
                'category' => 'RAM',
            ],
            [
                'name'=>'TEAMGROUP Team T-Force Night Hawk RGB DDR4',
                'photo' => 'images/RAM images/ram/ram_img13.png',
                'price' => '7225',
                'details' => "Memory Type: DDR4

                Memory Speeds: Available in various speeds, typically ranging from 2400MHz to 3600MHz and beyond.

                Capacity: 32GB (2 x 16GB) is a common configuration for this series.

                Timing: The timing specifications, including CAS latency (CL), depend on the specific model and speed of the memory.

                Voltage: DDR4 memory modules generally operate at 1.2 volts.

                Heat Spreader: The T-Force Night Hawk RGB series features a unique and aggressive heat spreader design for effective heat dissipation. The design often includes a combination of metal and plastic components.

                RGB Lighting: As the name suggests, the Night Hawk RGB modules come with customizable RGB lighting. The RGB lighting effects can be controlled using Team Group's T-FORCE BLITZ software, allowing users to personalize the lighting and synchronize it with other components.",
                'category' => 'RAM',
            ],
            [
                'name'=>'Viper 4 Blackout Series',
                'photo' => 'images/RAM images/ram/ram_img14.png',
                'price' => '5069',
                'details' => "Memory Type: DDR4

                Memory Speeds: Available in various speeds, typically ranging from 2400MHz to 4400MHz and beyond.

                Capacity: 16GB (2 x 8GB) is a common configuration for this series, but individual modules with 16GB capacity are also available.

                Timing:  The timing specifications, including CAS latency (CL), depend on the specific model and speed of the memory.

                Voltage: DDR4 memory modules generally operate at 1.2 volts.

                Heat Spreader: The Viper 4 Blackout series features an aluminum heat spreader designed for effective heat dissipation. The design is often low-profile and black for a stealthy appearance.

                XMP Support: Many Patriot Viper 4 Blackout modules come with XMP (eXtreme Memory Profile) support, allowing for easy overclocking and performance optimization.",
                'category' => 'RAM',
            ],
            [
                'name'=>'Geil EVO X II',
                'photo' => 'images/RAM images/ram/ram_img16.png',
                'price' => '5023',
                'details' => "Memory Type: DDR4

                Memory Speeds: Available in various speeds, typically ranging from 2400MHz to 3600MHz and beyond.

                Capacity: 16GB (2 x 8GB) is a common configuration for this series, but variations like 16GB (1 x 16GB) or other combinations may also exist.

                Timing: The timing specifications, including CAS latency (CL), depend on the specific model and speed of the memory.

                Voltage: DDR4 memory modules generally operate at 1.2 volts.

                Heat Spreader: The Evo X II series typically features a heat spreader for effective heat dissipation. The design can vary, and it may include RGB lighting elements for aesthetic appeal.

                RGB Lighting: The Evo X II modules come with customizable RGB lighting. The lighting effects can often be controlled using software provided by GeIL or other RGB control applications.",
                'category' => 'RAM',
            ],
            [
                'name'=>'The Trident Z Neo series',
                'photo' => 'images/RAM images/ram/ram_img17.png',
                'price' => '4390',
                'details' => "Memory Type: DDR4

                Memory Speeds: Available in various speeds, commonly ranging from 2400MHz to 3600MHz and beyond.

                Capacity: 16GB (2 x 8GB) is a common configuration for this series, but other configurations may also exist.

                Timing: The timing specifications, including CAS latency (CL), depend on the specific model and speed of the memory.

                Voltage: DDR4 memory modules generally operate at 1.35 volts.

                Heat Spreader: The Trident Z Neo series features an aluminum heat spreader designed for efficient heat dissipation. The design is often sleek and may include a distinct RGB lighting bar.

                RGB Lighting: The Trident Z Neo modules come with customizable RGB lighting. The lighting effects can be controlled using G.Skill's Trident Z Lighting Control software or other compatible RGB control applications.",
                'category' => 'RAM',
            ],
            [
                'name'=>'Ballistix Tactical Tracer RGB series',
                'photo' => 'images/RAM images/ram/ram_img18.png',
                'price' => '8028',
                'details' => "Memory Type: DDR4

                Memory Speeds: Available in various speeds, typically ranging from 2666MHz to 3600MHz and beyond.

                Capacity: 16GB (2 x 8GB) is a common configuration for this series, but other configurations may also exist.

                Timing: The timing specifications, including CAS latency (CL), depend on the specific model and speed of the memory.

                Voltage: DDR4 memory modules generally operate at 1.2 volts.

                Heat Spreader: The Ballistix Tactical Tracer RGB series typically features an aluminum heat spreader designed for effective heat dissipation. The design may include RGB lighting elements for aesthetic appeal.

                RGB Lighting: The Tactical Tracer RGB modules come with customizable RGB lighting. The lighting effects can often be controlled using Crucial's M.O.D. (Memory Overview Display) utility or other compatible RGB control applications.",
                'category' => 'RAM',
            ],
            [
                'name'=>'Crucial Ballistix Sport LT',
                'photo' => 'images/RAM images/ram/ram_info3_img1.png',
                'price' => '6570',
                'details' => "Type: DDR4

                Capacity: Available in various capacities ranging from 4GB to 64GB (individual module capacity)

                Speed: Available in various speeds, typically ranging from 2400MHz to 3200MHz (XMP profiles may offer higher speeds)

                Latency (CAS Latency): Various CAS latency options, such as CL16, CL17, CL18, etc.

                Voltage: Standard DDR4 voltage is 1.2V, but some higher- performance modules may require slightly higher voltage

                Form Factor: UDIMM (Unbuffered DIMM)

                Heat Spreader: Aluminum heat spreader for improved thermal performance and aesthetics

                Color: Available in various colors, often in white, gray, red, or black

                Compatibility: Designed for compatibility with various motherboards and Intel/AMD platforms

                XMP Profiles: Many Crucial Ballistix Sport LT modules support XMP (Extreme Memory Profile) for easy overclocking  and performance tuning.

                Configuration: Available in single modules or kits with multiple modules for dual-channel, quad-channel, or even higher configurations.",
                'category' => 'RAM',
            ],
            [
                'name'=>'Kingston HyperX Fury 8GB',
                'photo' => 'images/RAM images/ram/ram_info4_img1.png',
                'price' => '1650',
                'details' => "Type: DDR4

                Capacity: Available in various capacities ranging from 4GB to 128GB (individual module capacity)

                Speed: Available in various speeds, typically ranging from 2133MHz to 3733MHz (XMP profiles may offer higher speeds)

                Latency (CAS Latency): Various CAS latency options, such as CL14, CL15, CL16, etc.

                Voltage: Standard DDR4 voltage is 1.2V, but some higher- performance modules may require slightly higher voltage

                Form Factor: UDIMM (Unbuffered DIMM)

                Heat Spreader: Heat spreader for improved thermal performance and aesthetics

                Color: Available in various colors, including black, red, white, and others

                Compatibility: Designed for compatibility with various motherboards and Intel/AMD platforms

                XMP Profiles: Many Kingston HyperX Fury modules support XMP (Extreme Memory Profile) for easy overclocking and performance tuning.

                Configuration: Available in single modules or kits with multiple modules for dual-channel, quad-channel, or even higher configurations.",
                'category' => 'RAM',
            ],
            //PSU
            [
                'name'=>'Cooler Master MWE Gold 650W V2 Full Modular',
                'photo' => 'images/PSU images/PSU/psu_img12.png',
                'price' => '4895',
                'details' => "Power Output: Total Power Output: 650 Watts AC Input: 100-240V

                Efficiency: 80 PLUS Gold certified (up to 90% efficiency at 50% 

                Modularity: Fully modular design for customizable cable management

                Rails: Single +12V Rail: Provides stable power to the system and supports high-end components

                Connectors: 1 x 24-pin ATX 1 x 8-pin (4+4) EPS (CPU) 4 x 8-pin (6+2) PCIe (GPU) 9 x SATA 3 x Molex

                Protection: OVP (Over Voltage Protection) UVP (Under Voltage Protection) OCP (Over Current Protection) OPP (Over Power Protection) SCP (Short Circuit Protection)

                Cooling: 120mm HDB (Hydro-Dynamic Bearing) Fan for efficient and quiet cooling

                Size: Standard ATX form factor

                Dimensions: 150mm (W) 140mm (L) 86mm (H)

                Weight: Approximately 1.61 kg (3.55 lbs)",
                'category' => 'PSU',
            ],
            [
                'name'=>'EVGA 550 B5, 80 Plus BRONZE 550W, Fully Modular',
                'photo' => 'images/PSU images/PSU/psu_img14.png',
                'price' => '5138',
                'details' => "Power Output: Total Power Output: 550 Watts AC Input: 100-240V

                Efficiency: 80 PLUS Bronze certified (up to 85% efficiency at typical load)

                Modularity: Semi-modular design for some cable management flexibility

                Rails: Single +12V Rail: Provides stable power to the system and supports high-end components

                Connectors: 1 x 24-pin ATX 1 x 8-pin (4+4) EPS (CPU) 2 x 8-pin (6+2) PCIe (GPU) 9 x SATA 3 x Molex 1 x Floppy

                Protection: OVP (Over Voltage Protection) UVP (Under Voltage Protection) OCP (Over Current Protection) OPP (Over Power Protection) SCP (Short Circuit Protection) OTP (Over Temperature Protection)

                Cooling: 120mm Sleeve Bearing Fan for efficient and quiet cooling

                Size: Standard ATX form factor

                Dimensions: 150mm (W) 140mm (L) 86mm (H)

                Weight: Approximately 1.5 kg (3.31 lbs)",
                'category' => 'PSU',
            ],
            [
                'name'=>'FSP Dagger 500W',
                'photo' => 'images/PSU images/PSU/psu_img15.png',
                'price' => '5489',
                'details' => "Power Output:
                \n              Total Power Output: 600 Watts
                \n              AC Input: 100-240V\n
                \nEfficiency:
                \n              80 PLUS Gold certified (up to 90% efficiency at 50% load)\n
                \nModularity:
                \n              Fully modular design for customizable cable management\n
                \nRails:
                \n              Single +12V Rail: Provides stable power to the system
                \n              and supports high-end components\n
                \nConnectors:
                
                \n              1 x 24-pin ATX
                \n              1 x 8-pin (4+4) EPS (CPU)
                \n              2 x 8-pin (6+2) PCIe (GPU)
                \n              8 x SATA
                \n              3 x Molex\n
                \nProtection:
                
                \n              OVP (Over Voltage Protection)
                \n              UVP (Under Voltage Protection)
                \n              OCP (Over Current Protection)
                \n              OPP (Over Power Protection)
                \n              SCP (Short Circuit Protection)\n
                \nCooling:
                \n              92mm Hydro Dynamic Bearing Fan for efficient
                \n              and quiet cooling\n
                \nSize:
                \n              SFX-L form factor\n
                \nDimensions:
                \n              125mm (W)
                \n              100mm (L)
                \n               63.5mm (H)
                \nWeight:
                \n              Approximately 1.2 kg (2.65 lbs)",
                'category' => 'PSU',
            ],
            [
                'name'=>'Silver Stone ST60F-ES230 600W',
                'photo' => 'images/PSU images/PSU/psu_img16.png',
                'price' => '2450',
                'details' => "Power Output:
                \n              Total Power Output: 600 Watts
                \n              AC Input: 90-264V\n
                \nEfficiency:
                \n              80 PLUS Titanium certified (up to 94% efficiency
                \n              at 50% load)\n
                \nModularity:
                \n              Fully modular design for customizable cable management\n
                \nRails:
                \n              Single +12V Rail: Provides stable power to the system
                \n              and supports high-end components\n
                \nConnectors:
                
                \n              1 x 24-pin ATX
                \n              1 x 8-pin (4+4) EPS (CPU)
                \n              4 x 8-pin (6+2) PCIe (GPU)
                \n              8 x SATA
                \n              6 x Molex
                \n              1 x Floppy\n
                \nProtection:
                
                \n              OVP (Over Voltage Protection)
                \n              UVP (Under Voltage Protection)
                \n              OCP (Over Current Protection)
                \n              OPP (Over Power Protection)
                \n              SCP (Short Circuit Protection)\n
                \nCooling:
                \n              120mm Fan with Fluid Dynamic Bearing for efficient
                \n              and quiet cooling\n
                \nSize:
                \n              Standard ATX form factor\n
                \nDimensions:
                \n              150mm (W)
                \n              140mm (L)
                \n               86mm (H)\n
                \nWeight:
                \n              Approximately 1.5 kg (3.31 lbs)",
                'category' => 'PSU',
            ],
            [
                'name'=>'CV Series™ CV550',
                'photo' => 'images/PSU images/PSU/psu_img17 (2).png',
                'price' => '3049',
                'details' => "Power Output:
                \n              Total Power Output: 550 Watts
                \n              AC Input: 100-240V\n
                \nEfficiency:
                \n              80 PLUS Bronze certified (up to 85% efficiency at
                \n              typical load)\n
                \nModularity:
                \n              Non-modular design (all cables are permanently attached)\n
                \nRails:
                \n              Single +12V Rail: Provides stable power to the system
                \n              and supports basic components\n
                \nConnectors:
                
                \n              1 x 24-pin ATX
                \n              1 x 8-pin (4+4) EPS (CPU)
                \n              1 x 8-pin (6+2) PCIe (GPU)
                \n              6 x SATA
                \n              4 x Molex\n
                \nProtection:
                
                \n              OVP (Over Voltage Protection)
                \n              UVP (Under Voltage Protection)
                \n              OCP (Over Current Protection)
                \n              OPP (Over Power Protection)
                \n              SCP (Short Circuit Protection)\n
                \nCooling:
                \n              120mm Sleeve Bearing Fan for efficient and quiet cooling\n
                \nSize:
                \n              Standard ATX form factor\n
                \nDimensions:
                \n              125mm (W)
                \n              100mm (L)
                \n              63.5mm (H)\n
                \nWeight:
                \n              Approximately 1.55 kg (3.42 lbs)",
                'category' => 'PSU',
            ],
            [
                'name'=>'EVGA SuperNova G5 650 ',
                'photo' => 'images/PSU images/PSU/psu_info1_img1.png',
                'price' => '6418',
                'details' => "Power Output:
                \n              Total Power Output: 650 Watts
                \n              AC Input: 100 - 240 VAC, 10A, 50 - 60 Hz\n
                \nEfficiency:
                \n              80 PLUS Gold certified (up to 90% efficiency
                \n                  at typical load)\n
                \nModularity:
                \n              Fully modular design for cable management flexibility\n
                \nRails:
                \n              Single +12V Rail: Provides stable power to the system
                \n                  and supports high-end components\n
                \nConnectors:
                
                \n              1 x 24-pin ATX
                \n              2 x 8-pin (4+4) EPS (CPU)
                \n              4 x 8-pin (6+2) PCIe (GPU)
                \n              9 x SATA
                \n              4 x Molex
                \n              1 x Floppy\n
                \nProtection:
                
                \n              OVP (Over Voltage Protection)
                \n              UVP (Under Voltage Protection)
                \n              OCP (Over Current Protection)
                \n              OPP (Over Power Protection)
                \n              SCP (Short Circuit Protection)
                \n              OTP (Over Temperature Protection)\n
                \nCooling:
                \n              135mm Fluid Dynamic Bearing Fan for quiet
                \n                  and efficient cooling\n
                \nSize:
                \n              Standard ATX form factor\n
                \nDimensions:
                \n              150mm (W)
                \n               85mm (H)
                \n              150mm (L)\n
                \nWeight:
                \n              Approximately 7 lbs",
                'category' => 'PSU',
            ],
            [
                'name'=>'Corsair SF Series SF750 ',
                'photo' => 'images/PSU images/PSU/psu_img17.png',
                'price' => '9946',
                'details' => "Power Output:
                \n              Total Power Output: 750 Watts
                \n              AC Input: 100-240V\n
                \nEfficiency:
                \n              80 PLUS Gold certified (up to 90% efficiency at 50% load)\n
                \nModularity:
                \n              Fully modular design for customizable cable management\n
                \nRails:
                \n              Single +12V Rail: Provides stable power to the system and
                \n                  supports high-end components\n
                \nConnectors:
                
                \n              1 x 24-pin ATX
                \n              2 x 8-pin (4+4) EPS (CPU)
                \n              4 x 8-pin (6+2) PCIe (GPU)
                \n              8 x SATA
                \n              4 x Molex
                \n              1 x Floppy\n
                \nProtection:
                
                \n              OVP (Over Voltage Protection)
                \n              UVP (Under Voltage Protection)
                \n              OCP (Over Current Protection)
                \n              OPP (Over Power Protection)
                \n              SCP (Short Circuit Protection)
                \n              OTP (Over Temperature Protection)\n
                \nCooling:
                
                \n              135mm Rifle Bearing Fan for quiet and efficient cooling\n
                
                \nSize:
                \n              Standard ATX form factor\n
                \nDimensions:
                
                \n              150mm (W)
                \n                86mm (H)
                \n              160mm (L)
                \nWeight:
                \n              Approximately 1.67 kg (3.68 lbs)",
                'category' => 'PSU',
            ],
            //Mobo
            [
                'name'=>' MSI B450m Mortar Max ',
                'photo' => 'images/MOBO images/mobo/mobo_info2_img2.png',
                'price' => '5600',
                'details' => "CPU-
                \n              Supports AMD Ryzen 1st, 2nd, and 3rd Gen processors
                \n              Supports up to 3466 MHz DDR4 memory\n
                
                \nChipset: AMD B450 Chipset\n
                \nMemory-
                
                \n              4 x DDR4 memory slots, supporting up to 64GB
                \n              Dual-channel memory architecture
                \n              Supports DDR4: 1866/ 2133/ 2400/ 2667/ 2800/ 2933/
                \n                              3000/ 3066/ 3200/ 3466 MHz\n
                
                \nStorage-
                
                \n              1 x M.2 slot (Key M) supports PCIe 3.0 x4 and SATA 6Gb/s
                \n              6 x SATA 6Gb/s ports
                \n              Supports RAID 0, RAID 1, and RAID 10\n
                
                \nUSB-
                
                \n              2 x USB 3.2 Gen2 (Type-A)
                \n              6 x USB 3.2 Gen1 (4 ports on the back panel, 2 ports
                \n              available through the internal USB connectors)
                \n              6 x USB 2.0 (2 ports on the back panel, 4 ports available
                \n              through the internal USB connectors)\n
                
                \nAudio-
                
                \n              Realtek ALC892 Codec
                \n              7.1-Channel High Definition Audio
                \n              Supports S/PDIF output\n
                
                \nLAN:          1 x Realtek 8111H Gigabit LAN controller\n
                
                \nExpansion Slots-
                
                \n              1 x PCIe 3.0 x16 slot
                \n              1 x PCIe 2.0 x16 slot (supports x4 mode)
                \n              1 x PCIe 2.0 x1 slot\n
                
                \nMulti-GPU: Supports AMD CrossFire Technology\n
                
                \nBack I/O Ports:
                
                \n              1 x PS/2 Combo Port
                \n              1 x DVI-D
                \n              1 x HDMI
                \n              1 x LAN (RJ45) port
                \n              4 x USB 3.2 Gen1 Type-A
                \n              2 x USB 2.0
                \n              1 x HD Audio Connectors\n
                
                \nInternal Connectors-
                
                \n              1 x 24-pin ATX main power connector
                \n              1 x 8-pin ATX 12V power connector
                \n              6 x SATA 6Gb/s connectors
                \n              1 x USB 3.2 Gen1 connector (supports additional 2 USB
                \n              3.2 Gen1 ports)
                \n              2 x USB 2.0 connectors (supports additional 4
                \n              USB 2.0 ports)
                \n              1 x 4-pin CPU fan connector
                \n              2 x 4-pin system fan connectors
                \n              1 x Front panel audio connector
                \n              2 x System panel connectors
                \n              1 x Chassis Intrusion connector
                \n              1 x TPM module connector\n
                
                \nForm Factor:
                \n              Micro-ATX Form Factor",
                'category' => 'Motherboard',
            ],
            [
                'name'=>'B450 AORUS Elite ',
                'photo' => 'images/MOBO images/mobo/mobo_info5_img3.png',
                'price' => '5400',
                'details' => "CPU:

                \n          Supports AMD Ryzen 2nd Generation
                \n          Ryzen with Radeon Vega Graphics
                \n          Ryzen 1st Generation processors
                \n          AMD AM4 Socket\n
                
                \nChipset: AMD B450\n
                \nMemory:
                
                \n          4 x DDR4 DIMM sockets supporting up to 64 GB of
                \n              system memory
                \n          Dual-channel memory architecture
                \n          Supports DDR4 3600(O.C.)/3466(O.C.)/3333(O.C.)/
                \n             3200(O.C.)/2933/2667/2400/2133 MHz memory modules\n
                \nStorage:
                
                \n          1 x M.2 connector (Socket 3, M key, type 2242/2260/2280/22110
                \n             SATA and PCIe 3.0 x4/x2 SSD support)
                \n          6 x SATA 6Gb/s connectors
                \n          Support for RAID 0, RAID 1, and RAID 10\n
                
                \nUSB:
                
                \n          1 x USB 3.1 Gen 2 Type-A port (red) on the back panel
                \n          1 x USB 3.1 Gen 2 Type-C port on the back panel
                \n          2 x USB 3.1 Gen 1 ports available through the internal
                \n             USB header
                \n          6 x USB 2.0/1.1 ports (2 ports on the back panel, 4 ports
                \n             available through the internal USB headers)\n
                
                \nAudio:
                
                \n          Realtek ALC892 codec
                \n          High Definition Audio
                \n          2/4/5.1/7.1-channel\n
                
                \nLAN: Realtek GbE LAN chip (10/100/1000 Mbit)\n
                
                \nExpansion Slots:
                
                \n          1 x PCI Express x16 slot, running at x16
                \n          1 x PCI Express x16 slot, running at x4
                \n          1 x PCI Express x1 slot\n
                
                \nMulti-GPU: Support for AMD Quad-GPU CrossFire and 2-Way AMD
                \n             CrossFire technologies\n
                
                \nBack I/O Ports:
                
                \n          1 x PS/2 keyboard/mouse port
                \n          1 x HDMI port
                \n          1 x DVI-D port
                \n          1 x USB 3.1 Gen 2 Type-A port (red)
                \n          1 x USB 3.1 Gen 2 Type-C port
                \n          2 x USB 3.1 Gen 1 ports
                \n          2 x USB 2.0/1.1 ports
                \n          1 x RJ-45 port
                \n          3 x audio jacks\n
                
                \nInternal Connectors:
                
                \n          1 x 24-pin ATX main power connector
                \n          1 x 8-pin ATX 12V power connector
                \n          1 x CPU fan header
                \n          1 x system fan header
                \n          1 x RGB LED strip header
                \n          1 x M.2 Socket 3 connector
                \n          6 x SATA 6Gb/s connectors
                \n          1 x front panel header
                \n          1 x front panel audio header
                \n          1 x USB 3.1 Gen 1 header
                \n          1 x USB 2.0/1.1 header
                \n          1 x Trusted Platform Module (TPM) header
                \n          1 x Clear CMOS jumper\n
                
                \nForm Factor: Micro ATX Form Factor (24.4cm x 24.4cm)",
                'category' => 'Motherboard',
            ],
            [
                'name'=>'ASRock B460M Pro4',
                'photo' => 'images/MOBO images/mobo/mobo_info9_img1.png',
                'price' => '6190',
                'details' => "CPU Support:

                \n          Compatible with Intel 10th and 11th Gen Core,
                \n          Pentium Gold, and Celeron processors.\n
                
                \nChipset: Intel B460 chipset.\n
                
                \nMemory:
                \n          *4 x DIMM, Max. 128GB, DDR4 2933/2800/
                \n              2666/2400/2133 MHz Non-ECC, Un-buffered Memory.\n
                \n          *Supports Intel Extreme Memory Profile (XMP).\n
                
                \nExpansion Slots:
                
                \n          * 2 x PCIe 3.0 x16 slots (PCIE1: x16 mode;
                \n              PCIE3: x4 mode).\n
                \n          * 1 x PCIe 3.0 x1 slot.\n
                
                \nStorage:
                
                \n          * 1 x Hyper M.2 socket supports up to
                \n              PCIe Gen3 x4 and SATA3.
                \n          * 6 x SATA3 6.0 Gb/s connectors.\n
                
                \nUSB:
                
                \n          Rear USB Ports: 2 x USB 3.2 Gen2 Type-A ports,
                \n              6 x USB 3.2 Gen1 Type-A ports, 2 x USB 2.0 ports.\n
                \n          Front USB Ports: 1 x USB 3.2 Gen1 Type-C port,
                \n              2 x USB 3.2 Gen1 Type-A ports, 4 x USB 2.0 ports.\n
                
                \nGraphics:
                
                \n          Integrated Graphics Processor (Graphics output
                \n              options may vary by CPU).\n
                \n          Supports HDMI 1.4 with a max resolution of 4K x 2K
                \n              (4096x2160) @ 30Hz.\n
                
                \nAudio: Realtek ALC1200 7.1-Channel High Definition Audio CODEC.\n
                
                \nLAN: Gigabit LAN 10/100/1000 Mb/s.\n
                
                \nForm Factor: Micro-ATX form factor.\n
                
                \nOther Features:
                
                \n          * ASRock Super Alloy.
                \n          * ASRock Steel Slot.
                \n          * ASRock Full Spike Protection.
                \n          * ASRock Live Update and APP Shop.",
                'category' => 'Motherboard',
            ],
            [
                'name'=>'ROG STRIX B460-G GAMING',
                'photo' => 'images/MOBO images/mobo/mobo_info10_img3.png',
                'price' => '7850',
                'details' => "CPU Support:

                \n          Compatible with Intel 10th and 11th Gen Core,
                \n          Pentium Gold, and Celeron processors.\n
                
                \nChipset:  Intel B460 chipset.\n
                
                \nMemory:
                
                \n          * 4 x DIMM, Max. 128GB, DDR4 2933/2800/2666/
                \n              2400/2133 MHz Non-ECC, Un-buffered Memory.\n
                \n          * Supports Intel Extreme Memory Profile (XMP).\n
                
                \nExpansion Slots:
                
                \n          * 1 x PCIe 3.0 x16 (x16 mode).
                \n          * 1 x PCIe 3.0 x16 (x4 mode).
                \n          * 1 x PCIe 3.0 x1.\n
                
                \nStorage:
                
                \n          * 1 x M.2 slot supports up to PCIe 3.0 x4
                \n              and SATA modes.\n
                \n          * 6 x SATA 6Gb/s ports.\n
                
                \nUSB:
                
                \n          * Rear USB Ports: 4 x USB 3.2 Gen 2 Type-A ports,
                \n              2 x USB 3.2 Gen 1 Type-A ports, 2 x USB 2.0 ports.\n
                \n          * Front USB Ports: 1 x USB 3.2 Gen 2 Type-C port,
                \n              2 x USB 3.2 Gen 1 Type-A ports, 4 x USB 2.0 ports.\n
                
                \nGraphics:
                
                \n          * Integrated Graphics Processor (Graphics output
                \n              options may vary by CPU).\n
                \n          * Supports HDMI 1.4b with a max resolution of 4096
                \n              @ 30 Hz, DisplayPort 1.4 with a max resolution of
                \n              x 2160 x 4096 x 2304 @ 60 Hz.\n
                
                \nAudio:    SupremeFX S1220A 7.1-Channel High Definition
                \n                  Audio CODEC.\n
                
                \nLAN:      Intel I219-V 1Gb Ethernet.\n
                
                \nWireless LAN:
                
                \n          * Intel Wi-Fi 6 AX200.
                \n          * Bluetooth 5.1.\n
                
                \nForm Factor:  Micro-ATX form factor.\n
                
                \nOther Features:
                
                \n          ASUS Aura Sync RGB lighting.
                \n          ASUS AI Noise-Canceling Microphone technology.
                \n          ASUS Fan Xpert 4.
                \n          ASUS EZ DIY.
                \n          ASUS CrashFree BIOS 3.
                \n          ASUS EZ Flash 3.",
                'category' => 'Motherboard',
            ],
            [
                'name'=>' MSI MPG B550 GAMING EDGE',
                'photo' => 'images/MOBO images/mobo/mobo_info12_img3.png',
                'price' => '8650',
                'details' => "Chipset: AMD B550 Chipset
                \nSocket: AM4 socket for AMD Ryzen processors\n
                \nMemory:
                \n4 x DDR4 memory slots, supporting up to 128GB
                \n          * Supports DDR4 1866/ 2133/ 2400/ 2667/ 2800/
                \n              2933/ 3000/ 3066/ 3200 MHz by JEDEC\n
                \n          * Supports DDR4 2667/ 2800/ 2933/ 3000/ 3066/
                \n              3200/ 3466/ 3600/ 3733/ 3866/ 4000/ 4133/
                \n              4266/ 4400/ 4533/ 4600/ 4733/ 4800/ 4866/
                \n              5000/ 5066/ 5200 MHz by A-XMP OC MODE\n
                \n          * Dual channel memory architecture
                \n          * Supports non-ECC UDIMM memory
                \n          * Supports ECC UDIMM memory (non-ECC mode)
                \n          * Supports un-buffered memory\n
                
                \nExpansion Slots:
                \n          1 x PCIe 4.0/3.0 x16 slot (PCI_E1)
                \n          1 x PCIe 3.0 x16 slot (PCI_E3, supports x4 mode)
                \n          2 x PCIe 3.0 x1 slots\n
                
                \nMulti-GPU Support:
                \n          Supports 2-Way AMD CrossFire Technology\n
                
                \nStorage:
                \n          1 x M.2 slot (Key M)
                \n          6 x SATA 6Gb/s ports\n
                
                \nNetworking:
                \n          Realtek® RTL8125B 2.5G LAN
                \n          Intel® Wi-Fi 6 AX200
                \n          Bluetooth 5.1\n
                
                \nAudio:
                \n          Realtek® ALC1200 Codec
                \n          7.1-Channel High Definition Audio
                \n          Supports optical S/PDIF output\n
                
                \nUSB:
                \n          1 x USB 3.2 Gen 2 10Gbps Type-C port-back panel
                \n          1 x USB 3.2 Gen 2 10Gbps Type-A port-back panel
                \n          2 x USB 3.2 Gen 1 5Gbps ports-back panel
                \n          2 x USB 3.2 Gen 1 5Gbps ports available through
                \n                   the internal USB 3.2 Gen 1 connector
                \n          6 x USB 2.0 ports (2 Type-A ports on the back panel,
                \n          4 ports available through the internal
                \n                   USB 2.0 connectors)\n
                
                \nWireless LAN and Bluetooth:
                \n          Intel® Wi-Fi 6 AX200 module
                \n          Supports Wi-Fi 802.11 a/b/g/n/ac/ax, dual band
                \n              (2.4GHz, 5GHz) up to 2.4 Gbps speed
                \n          Supports Bluetooth 5.1\n
                
                \nRGB Lighting:
                \n          Mystic Light RGB LED lighting control\n
                
                \nForm Factor: ATX Form Factor (12 in. x 9.6 in.)",
                'category' => 'Motherboard',
            ],
            [
                'name'=>'GIGABYTE X570 Aorus Elite',
                'photo' => 'images/MOBO images/mobo/mobo_info13_img1.png',
                'price' => '11544',
                'details' => "Chipset: AMD X570
                \nCPU Socket:
                \n          AM4 socket for 2nd and 3rd Gen AMD Ryzen™
                \n          Ryzen™ with Radeon™ Vega Graphics Processors\n
                
                
                \nMemory:
                \n          * 4 x DDR4 DIMM sockets supporting up to 128GB
                \n              (32GB single DIMM capacity)
                \n          * Dual channel memory architecture
                \n          * Support for DDR4 3200(O.C.) / 2933 / 2667
                \n              2400 / 2133 MHz memory modules
                \n          * ECC Un-buffered memory support
                \n          * XMP support\n
                
                \nMulti-GPU Support:
                \n          * Support for AMD Quad-GPU CrossFire and
                \n              2-Way AMD CrossFire technologies\n
                
                \nExpansion Slots:
                \n          1 x PCI Express x16 slot, running at x16 (PCIEX16)
                \n          1 x PCI Express x16 slot, running at x4 (PCIEX4)
                \n          2 x PCI Express x1 slots\n
                
                \nStorage:
                \n          * 1 x M.2 connector (Socket 3, M key, type 2242/
                \n              2260/2280/22110 SATA and PCIe 4.0
                \n              x4/x2 SSD support)
                \n          * 1 x M.2 connector (Socket 3, M key, type 2242/
                \n              2260/2280 PCIe 4.0 x4/x2 SSD support)
                \n          * 6 x SATA 6Gb/s connectors
                \n          * Support for RAID 0, RAID 1, and RAID 10\n
                
                \nNetworking:
                \n          Realtek 8118 Gaming LAN\n
                \nAudio:
                \n          Realtek ALC1200 codec
                \n          High Definition Audio
                \n          2/4/5.1/7.1-channel
                \n          Support for S/PDIF Out\n
                
                \nUSB:
                \n          1 x USB Type-C™ port on the back panel,
                \n              with USB 3.2 Gen 2 support
                \n          1 x USB 3.2 Gen 2 Type-A port (red)
                \n              on the back panel
                \n          8 x USB 3.2 Gen 1 ports (4 ports-back panel,
                \n             4 ports available through internal USB headers)
                \n          4 x USB 2.0/1.1 ports available through
                \n              internal USB headers\n
                
                \nRGB Fusion 2.0:
                \n          RGB LED strips in 7 colors
                \n          Support for Addressable LED Strip
                \n          Support for RGB (RGBW) LED Strips\n
                
                \nForm Factor: ATX Form Factor; 30.5cm x 24.4cm\n
                
                \nOther Features:
                \n          Q-Flash Plus
                \n          Ultra Durable PCIe Armor
                \n          GIGABYTE DualBIOS™
                \n          Smart Fan 5
                \n          Front USB 3.2 Gen 1 Type-C Header",
                'category' => 'Motherboard',
            ],
            [
                'name'=>'MSI MPG Z590 GAMING EDGE',
                'photo' => 'images/MOBO images/mobo/mobo_info18_img2.png',
                'price' => '15877',
                'details' => "Socket Type:
                \n              LGA1200 (Supports 10th and 11th Gen Intel Core,
                \n              Pentium Gold, and Celeron processors)\n
                \nChipset: Intel Z590\n
                \nForm Factor: ATX\n
                \nMemory:
                \n              4 x DDR4 DIMM slots
                \n              Supports DDR4 2133/2400/2666/2933/3200/3333/3600
                \n              3733/3866/4000/4133/4266/4400/4600+ MHz by XMP OC
                \n              Max. capacity of system memory: 128GB\n
                \nExpansion Slots:
                \n              1 x PCIe 4.0/3.0 x16 slot (PCI_E1)
                \n              1 x PCIe 3.0 x16 slot (PCI_E3, supports x4 mode)
                \n              2 x PCIe 3.0 x1 slots\n
                \nStorage:
                \n              6 x SATA 6Gb/s connectors
                \n              3 x M.2 slots (Key M)
                \n              M2_1 slot supports PCIe 4.0/3.0 x4 and SATA 6Gb/s
                \n              M2_2 slot supports PCIe 3.0 x4 and SATA 6Gb/s
                \n              M2_3 slot supports PCIe 3.0 x4\n
                \nUSB:
                \n              1 x USB 3.2 Gen 2x2 Type-C port on the back panel
                \n              1 x USB 3.2 Gen 2 Type-A port on the back panel
                \n              2 x USB 3.2 Gen 1 ports on the back panel
                \n              4 x USB 2.0 ports on the back panel
                \n              6 x USB 2.0 ports available through internal USB
                \n              headers\n
                \nNetworking:
                \n              Intel I225-V 2.5G LAN controller
                \n              Intel Wi-Fi 6E AX201\n
                \nAudio:
                \n              Realtek ALC1200 Codec
                \n              7.1-Channel High Definition Audio\n
                \nForm Factor: ATX Form Factor; 30.4cm x 24.3cm\n
                \nPower Delivery:
                \n              16+1+1 power phases with dual 8-pin power
                \n              connectors\n
                \nRGB Mystic Light:
                \n              Supports 16.8 million colors / 29 effects controlled
                \n              in one click
                \n              Mystic Light Extension supports RGB, Rainbow, and
                \n              Corsair LED strip",
                'category' => 'Motherboard',
            ],
            //GPU
            [
                'name'=>'MSI GeForce RTX 3070',
                'photo' => 'images/GPU images/gpu/gpu_img5.png',
                'price' => '25542',
                'details' => "Graphics Processor
                \nGPU Name: GA104
                \nGPU Variant: GA104-300-A1
                \nArchitecture: Ampere
                \nFoundry: Samsung
                \nProcess Size: 8 nm
                \nTransistors: 17,400 million
                \nDensity: 44.4M / mm²
                \nDie Size: 392 mm²
                \nChip Package: BGA-2713\n
                
                \nGraphics Card
                \nRelease Date: Sep 1st, 2020
                \nGeneration: GeForce 30
                \nPredecessor: GeForce 20
                \nSuccessor: GeForce 30
                \nProduction: Active
                \nBus Interface: PCIe 4.0 x16\n
                
                \nMemory
                \nMemory Size: 8 GB
                \nMemory Type: GDDR6
                \nMemory Bus: 256 bit
                \nBandwidth: 448.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1500 MHz
                \nBoost Clock: 1815 MHz (+5%)
                \nMemory Clock: 1750 MHz / 14 Gbps effective\n
                
                \nRender Config
                \nShading Units: 5888
                \nTMUs: 184
                \nROPs: 96
                \nSM Count: 46
                \nTensor Cores: 184
                \nRT Cores: 46
                \nL1 Cache: 128 KB (per SM)
                \nL2 Cache: 4 MB\n
                
                \nGraphics Features
                \nDirectX: 12 (12_1)
                \nOpenGL: 4.6
                \nOpenCL: 3.0
                \nVulkan: 1.3
                \nCUDA: 8.6
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 286 mm / 11.3 inches
                \nWidth: 115 mm / 4.5 inches
                \nHeight: 51 mm / 2 inches
                \nTDP: 220 W
                \nSuggested PSU: 550 W
                \nOutputs: 2x HDMI 2.1 / 2x DisplayPort 1.4a
                \nPower Connectors: 1x 6-pin + 1x8-pin
                \nIdle Fan Stop: Yes
                \nBoard Number: PG142 SKU 10",
                'category' => 'GPU',
            ],
            [
                'name'=>'AMD Radeon RX 6600 XT',
                'photo' => 'images/GPU images/gpu/gpu_img6.png',
                'price' => '15728',
                'details' => "Graphics Processor
                \nGPU Name: Navi 23
                \nGPU Variant: Navi 23 XT (215-130000006)
                \nArchitecture: RDNA 2.0
                \nFoundry: TSMC
                \nProcess Size: 7 nm
                \nTransistors: 11,060 million
                \nDensity: 46.7M / mm²
                \nDie Size: 237 mm²
                \nChip Package: BGA-1269\n
                
                \nGraphics Card
                \nRelease Date: Jul 30th, 2021
                \nGeneration: Navi II (RX 6000)
                \nPredecessor: Navi
                \nSuccessor: Navi III
                \nProduction: Active
                \nBus Interface: PCIe 4.0 x16\n
                
                \nMemory
                \nMemory Size: 8 GB
                \nMemory Type: GDDR6
                \nMemory Bus: 128 bit
                \nBandwidth: 256.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 2000 MHz (+2%)
                \nGame Clock: 2382 MHz (+1%)
                \nBoost Clock: 2593 MHz
                \nMemory Clock: 2000 MHz / 16 Gbps effective\n
                
                \nRender Config
                \nShading Units: 2048
                \nTMUs: 128
                \nROPs: 64
                \nCompute Units: 32
                \nRT Cores: 32
                \nL1 Cache: 32 KB (per WGP)
                \nL2 Cache: 128 KB per Array\n
                
                \nGraphics Features
                \nDirectX: 12 Ultimate (12_1)
                \nOpenGL: 4.6
                \nOpenCL: 2.1
                \nVulkan: 1.3
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 243 mm / 9.6 inches
                \nWidth: 134 mm / 5.3 inches
                \nHeight: 49 mm / 1.9 inches
                \nTDP: 160 W
                \nSuggested PSU: 450 W
                \nOutputs: 1x HDMI 2.1 / 3x DisplayPort 1.4a
                \nPower Connectors: 1x8-pin
                \nBoard Number: D532",
                'category' => 'GPU',
            ],
            [
                'name'=>'MSI Radeon RX 580',
                'photo' => 'images/GPU images/gpu/gpu_img8.png',
                'price' => '4329',
                'details' => "Graphics Processor
                \nGPU Name: Polaris 20
                \nGPU Variant: Polaris 20 XTX (215-0910038)
                \nArchitecture: GCN 4.0
                \nFoundry: GlobalFoundries
                \nProcess Size: 14 nm
                \nTransistors: 5,700 million
                \nDensity: 24.6M / mm²
                \nDie Size: 232 mm²
                \nChip Package: BGA-1401\n
                
                \nGraphics Card
                \nRelease Date: Apr 18th, 2017
                \nGeneration: Polaris (RX 500)
                \nPredecessor: Arctic Islands
                \nSuccessor: Vega
                \nProduction: Active
                \nBus Interface: PCIe 3.0 x16\n
                
                \nMemory
                \nMemory Size: 8 GB
                \nMemory Type: GDDR5
                \nMemory Bus: 256 bit
                \nBandwidth: 256.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1257 MHz
                \nBoost Clock: 1380 MHz (+3%)
                \nMemory Clock: 2000 MHz / 8 Gbps effective\n
                
                \nRender Config
                \nShading Units: 2304
                \nTMUs: 144
                \nROPs: 32
                \nCompute Units: 36
                \nL1 Cache: 16 KB (per CU)
                \nL2 Cache: 2 MB\n
                
                \nGraphics Features
                \nDirectX: 12 (12_1)
                \nOpenGL: 4.6
                \nOpenCL: 2.1
                \nVulkan: 1.3
                \nCUDA:7.5
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 275 mm / 10.8 inches
                \nTDP: 185 W
                \nSuggested PSU: 450 W
                \nOutputs: 1x DVI / 2x HDMI 2.0 / 2x DisplayPort 1.4a
                \nPower Connectors: 1x 8-pin
                \nBoard Number: C940, D009-04",
                'category' => 'GPU',
            ],
            [
                'name'=>'Gigabyte Radeon RX 590',
                'photo' => 'images/GPU images/gpu/gpu_img10.png',
                'price' => '5999',
                'details' => "Graphics Processor
                \nGPU Name: Polaris 20
                \nGPU Variant: Polaris 20 XTX (215-0910038)
                \nArchitecture: GCN 4.0
                \nFoundry: GlobalFoundries
                \nProcess Size: 14 nm
                \nTransistors: 5,700 million
                \nDensity: 24.6M / mm²
                \nDie Size: 232 mm²
                \nChip Package: BGA-1401\n
                
                \nGraphics Card
                \nRelease Date: Apr 18th, 2017
                \nGeneration: Polaris (RX 500)
                \nPredecessor: Arctic Islands
                \nSuccessor: Vega
                \nProduction: Active
                \nBus Interface: PCIe 3.0 x16\n
                
                \nMemory
                \nMemory Size: 8 GB
                \nMemory Type: GDDR5
                \nMemory Bus: 256 bit
                \nBandwidth: 256.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1257 MHz
                \nBoost Clock: 1380 MHz (+3%)
                \nMemory Clock: 2000 MHz / 8 Gbps effective\n
                
                \nRender Config
                \nShading Units: 2304
                \nTMUs: 144
                \nROPs: 32
                \nCompute Units: 36
                \nL1 Cache: 16 KB (per CU)
                \nL2 Cache: 2 MB\n
                
                \nGraphics Features
                \nDirectX: 12 (12_1)
                \nOpenGL: 4.6
                \nOpenCL: 2.1
                \nVulkan: 1.3
                \nCUDA:7.5
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 275 mm / 10.8 inches
                \nTDP: 185 W
                \nSuggested PSU: 450 W
                \nOutputs: 1x DVI / 2x HDMI 2.0 / 2x DisplayPort 1.4a
                \nPower Connectors: 1x 8-pin
                \nBoard Number: C940, D009-04",
                'category' => 'GPU',
            ],
            [
                'name'=>'ASRock AMD Radeon RX 5500',
                'photo' => 'images/GPU images/gpu/gpu_img12.png',
                'price' => '7425',
                'details' => "Graphics Processor
                \nGPU Name: Navi 14
                \nGPU Variant: Navi 14 XTX (215-0932396)
                \nArchitecture: RDNA 1.0
                \nFoundry: TSMC
                \nProcess Size: 7 nm
                \nTransistors: 6,400 million
                \nDensity: 40.5M / mm²
                \nDie Size: 158 mm²
                \nChip Package: BGA-1125\n
                
                \nGraphics Card
                \nRelease Date: Dec 12th, 2019
                \nGeneration: Navi (RX 5000)
                \nPredecessor: Vega
                \nSuccessor: Navi II
                \nProduction: Active
                \nBus Interface: PCIe 4.0 x16\n
                
                \nMemory
                \nMemory Size: 8 GB
                \nMemory Type: GDDR6
                \nMemory Bus: 128 bit
                \nBandwidth: 224.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1685 MHz  (+5%)
                \nBoost Clock: 1737 MHz (+1%)
                \nBoost Clock: 1845 MHz
                \nMemory Clock: 1750 MHz / 14 Gbps effective\n
                
                \nRender Config
                \nShading Units: 1408
                \nTMUs: 88
                \nROPs: 32
                \nSM Count: 22
                \nL2 Cache: 2 MB\n
                
                \nGraphics Features
                \nDirectX: 12 (12_1)
                \nOpenGL: 4.6
                \nOpenCL: 2.1
                \nVulkan: 1.3
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 241 mm / 9.5 inches
                \nWidth: 127 mm / 5 inches
                \nHeight: 42 mm / 1.7 inches
                \nTDP: 130 W
                \nSuggested PSU: 300 W
                \nOutputs: 1x HDMI 2.0lb / 3x DisplayPort 1.4a
                \nPower Connectors: 1x 8-pin
                \nBoard Number: 109-D33257-00B_02",
                'category' => 'GPU',
            ],
            [
                'name'=>'ASUS ROG Strix RTX 3050',
                'photo' => 'images/GPU images/gpu/gpu_img13.png',
                'price' => '18449',
                'details' => "Graphics Processor
                \nGPU Name: GA106
                \nGPU Variant: GA106-150-KA-A1
                \nArchitecture: Ampere
                \nFoundry: Samsung
                \nProcess Size: 8 nm
                \nTransistors: 12,000 million
                \nDensity: 12,000 million
                \nDie Size: 276 mm²
                \nChip Package: BGA-2713\n
                
                \nGraphics Card
                \nRelease Date: Jan 4th, 2022
                \nGeneration: GeForce 30
                \nPredecessor: GeForce 20
                \nSuccessor: GeForce 40
                \nProduction: Active
                \nBus Interface: PCIe 4.0 x8\n
                
                \nMemory
                \nMemory Size: 8 GB
                \nMemory Type: GDDR6
                \nMemory Bus: 128 bit
                \nBandwidth: 224.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1552 MHz
                \nBoost Clock: 1860 MHz (+4%)
                \nMemory Clock: 1750 MHz / 14 Gbps effective\n
                
                \nRender Config
                \nShading Units: 2560
                \nTMUs: 80
                \nROPs: 32
                \nSM Count: 20
                \nTensor Cores: 80
                \nRT Cores: 20
                \nL1 Cache: 128 KB (per SM)
                \nL2 Cache: 2 MB\n
                
                \nGraphics Features
                \nDirectX: 12 Ultimate(12_1)
                \nOpenGL: 4.6
                \nOpenCL: 3.0
                \nVulkan: 1.3
                \nCUDA: 8.6
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 300 mm / 11.8 inches
                \nWidth: 134 mm / 5.3 inches
                \nHeight: 54 mm / 2.1 inches
                \nTDP: 130 W
                \nSuggested PSU: 300 W
                \nOutputs: 1x HDMI 2.1 / 3x DisplayPort 1.4a
                \nPower Connectors: 1x 8-pin
                \nBoard Number: PG190 SKU 70",
                'category' => 'GPU',
            ],
            [
                'name'=>'Gigabyte Radeon RX 6700 XT',
                'photo' => 'images/GPU images/gpu/gpu_img14.png',
                'price' => '18848',
                'details' => "Graphics Processor
                \nGPU Name: Polaris 30
                \nGPU Variant: Polaris 30 XT (215-0922006)
                \nArchitecture: GCN 4.0
                \nFoundry: GlobalFoundries
                \nProcess Size: 12 nm
                \nTransistors: 5,700 million
                \nDensity: 5,700 million
                \nDie Size: 5,700 million
                \nChip Package: BGA-1401\n
                
                \nGraphics Card
                \nRelease Date: Nov 15th, 2018
                \nGeneration: PolarisRX (500)
                \nPredecessor: Arctic Islands
                \nSuccessor: Vega
                \nProduction: Active
                \nBus Interface: PCIe 3.0 x16\n
                
                \nMemory
                \nMemory Size: 8 GB
                \nMemory Type: GDDR5
                \nMemory Bus: 256 bit
                \nBandwidth: 256.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1469 MHz
                \nBoost Clock: 1545 MHz
                \nMemory Clock: 2000 MHz / 8 Gbps effective\n
                
                \nRender Config
                \nShading Units: 2304
                \nTMUs: 144
                \nROPs: 32
                \nCompute Units: 36
                \nL1 Cache: 16 KB (per SM)
                \nL2 Cache: 2 MB\n
                
                \nGraphics Features
                \nDirectX: 12 (12_1)
                \nOpenGL: 4.6
                \nOpenCL: 3.0
                \nVulkan: 1.3
                \nCUDA:7.5
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 232 mm / 9.1 inches
                \nWidth: 116 mm / 4.6 inches
                \nHeight: 40 mm / 1.6 inches
                \nTDP: 175 W
                \nSuggested PSU: 450 W
                \nOutputs: 1x DVI / 1x HDMI 2.0lb / 3x DisplayPort 1.4a
                \nPower Connectors: 1x 8-pin
                \nBoard Number: C944-41",
                'category' => 'GPU',
            ],
            [
                'name'=>'MSI GeForce GTX 1650',
                'photo' => 'images/GPU images/gpu/gpu_img15.png',
                'price' => '8900',
                'details' => "Graphics Processor
                \nGPU Name: TU117
                \nGPU Variant: TU117-300-A1
                \nArchitecture: Turing
                \nFoundry: TSMC
                \nProcess Size: 12 nm
                \nTransistors: 4,700 million
                \nDensity: 23.5M / mm²
                \nDie Size: 200 mm²
                \nChip Package: BGA-960\n
                
                \nGraphics Card
                \nRelease Date: Apr 23rd, 2019
                \nGeneration: GeForce 16
                \nPredecessor: GeForce 10
                \nSuccessor: GeForce 20
                \nProduction: Active
                \nBus Interface: PCIe 3.0 x16\n
                
                \nMemory
                \nMemory Size: 4 GB
                \nMemory Type: GDDR5
                \nMemory Bus: 128 bit
                \nBandwidth: 128.1 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1485 MHz
                \nBoost Clock: 1860 MHz (+12%)
                \nMemory Clock: 2001 MHz / 8 Gbps effective\n
                
                \nRender Config
                \nShading Units: 896
                \nTMUs: 56
                \nROPs: 32
                \nSM Count: 14
                \nL1 Cache: 64 KB (per SM)
                \nL2 Cache: 1024 KB\n
                
                \nGraphics Features
                \nDirectX: 12 (12_1)
                \nOpenGL: 4.6
                \nOpenCL: 3.0
                \nVulkan: 1.3
                \nCUDA: 7.5
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 245 mm / 9.6 inches
                \nWidth: 127 mm / 5 inches
                \nHeight: 39 mm / 1.5 inches
                \nTDP: 75 W
                \nSuggested PSU: 250 W
                \nOutputs: 1x HDMI 2.0 / 2x DisplayPort 1.4a
                \nPower Connectors: 1x 6-pin
                \nBoard Number: PG174 SKU 0",
                'category' => 'GPU',
            ],
            [
                'name'=>'Radeon RX 6800',
                'photo' => 'images/GPU images/gpu/gpu_img16.png',
                'price' => '31230',
                'details' => "Graphics Processor
                \nGPU Name: Navi 21
                \nGPU Variant: Navi 21 XL (215-121000187)
                \nArchitecture: RDNA 2.0
                \nFoundry: TSMC
                \nProcess Size: 7 nm
                \nTransistors: 26,800 million
                \nDensity: 51.5M / mm²
                \nDie Size: 520 mm²
                \nChip Package: BGA-2425\n
                
                \nGraphics Card
                \nRelease Date: Oct 28th, 2020
                \nGeneration: Navi II (RX 6000)
                \nPredecessor: Navi
                \nSuccessor: Navi III
                \nProduction: Active
                \nBus Interface: PCIe 4.0 x16\n
                
                \nMemory
                \nMemory Size: 16 GB
                \nMemory Type: GDDR6
                \nMemory Bus: 256 bit
                \nBandwidth: 512.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 1700 MHz
                \nBoost Clock: 1815 MHz
                \nBoost Clock: 2105 MHz
                \nMemory Clock: 2000 MHz / 16 Gbps effective\n
                
                \nRender Config
                \nShading Units: 3840
                \nTMUs: 240
                \nROPs: 96
                \nCompute Units: 60
                \nRT Cores: 60
                \nL0 Cache: 32 KB per WGP
                \nL1 Cache: 128 KB per Array
                \nL2 Cache: 4 MB
                \nL3 Cache: 128 MB\n
                
                \nGraphics Features
                \nDirectX: 12 Ultimate(12_1)
                \nOpenGL: 4.6
                \nOpenCL: 3.0
                \nVulkan: 1.3
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Dual-slot
                \nLength: 267 mm / 10.5 inches
                \nWidth: 120 mm / 4.7 inches
                \nHeight: 40 mm / 1.6 inches
                \nTDP: 250 W
                \nSuggested PSU: 600 W
                \nOutputs: 1x HDMI 2.1 / 2x DisplayPort 1.4a / 1x USB Type C
                \nPower Connectors: 2x 8-pin
                \nBoard Number: 109-D412A7-00_03",
                'category' => 'GPU',
            ],
            [
                'name'=>'Aurus AMD Radeon RX 6700 XT',
                'photo' => 'images/GPU images/gpu/gpu_img20.png',
                'price' => '23701',
                'details' => "Graphics Processor
                \nGPU Name: Navi 22
                \nGPU Variant: Navi 22 XT (215-127000006)
                \nArchitecture: RDNA 2.0
                \nFoundry: TSMC
                \nProcess Size: 7 nm
                \nTransistors: 17,200 million
                \nDensity: 51.3M / mm²
                \nDie Size: 335 mm²
                \nChip Package: BGA-1701\n
                
                \nGraphics Card
                \nRelease Date: Mar 3rd, 2021
                \nGeneration: Navi II (RX 6000)
                \nPredecessor: Navi
                \nSuccessor: Navi III
                \nProduction: Active
                \nBus Interface: PCIe 4.0 x16\n
                
                \nMemory
                \nMemory Size: 12 GB
                \nMemory Type: GDDR6
                \nMemory Bus: 192 bit
                \nBandwidth: 384.0 GB/s\n
                
                \nClock Speeds
                \nBase Clock: 2457 MHz (+6%)
                \nGame Clock: 2548 MHz (+5%)
                \nBoost Clock: 2622 MHz (+2%)
                \nMemory Clock: 2001 MHz / 16 Gbps effective\n
                
                \nRender Config
                \nShading Units: 2560
                \nTMUs: 160
                \nROPs: 64
                \nCompute Units: 40
                \nRT Cores: 40
                \nL0 Cache: 32 KB per WGP
                \nL1 Cache: 128 KB per Array
                \nL2 Cache: 3 MB
                \nL3 Cache:96 MB\n
                
                \nGraphics Features
                \nDirectX: 12 Ultimate(12_1)
                \nOpenGL: 4.6
                \nOpenCL: 3.0
                \nVulkan: 1.3
                \nCUDA:7.5
                \nShader Model: 6.7\n
                
                \nBoard Design
                \nSlot Width: Triple-slo
                \nLength: 296 mm / 11.7 inches
                \nWidth: 114 mm / 4.5 inches
                \nHeight: 56 mm / 2.2 inches
                \nTDP: 230 W
                \nSuggested PSU: 550 W
                \nOutputs: 2x HDMI 2.0 / 2x DisplayPort 1.4a
                \nPower Connectors: 1x6-pin + 1x 8-pin
                \nBoard Number: 109-D512A7-00_02",
                'category' => 'GPU',
            ],
            //CPU
            [
                'name'=>'Intel Core i5-10600KF',
                'photo' => 'images/CPU images/cpu/cpu_img2.png',
                'price' => '8099',
                'details' => "Physical-
                \nSocket:	Intel Socket 1200
                \nFoundry:	Intel
                \nProcess Size:	14 nm
                \nPackage:	FC-LGA1200
                \ntCaseMax:	72°C
                \ntJMax:	100°C\n
                
                \nProcessor-
                \nMarket:	Desktop
                \nProduction Status:	Active
                \nRelease Date:	Apr 30th, 2020
                \nPart#:	SRH3C / SRH78\n
                
                \nPerformance-
                \nFrequency:	2.9 GHz
                \nTurbo Clock:	up to 4.3 GHz
                \nBase Clock:	100 MHz
                \nMultiplier:	29.0x
                \nMultiplier Unlocked:	No
                \nTDP:	65 W
                \nPL1:	65 W
                \nPL2:	134 W
                \nFP32:	768.0 GFLOPS\n
                
                \nArchitecture-
                \nCodename:	Comet Lake
                \nGeneration:	Core i5(Comet Lake)
                \nMemory Support:	DDR4
                \nRated Speed:	2666 MT/s
                \nMemory Bus:	Dual-channel
                \nECC Memory:	No
                \nPCI-Express:	Gen 3, 16 Lanes (CPU only)\n
                
                \nCore Config-
                \n# of Cores:	6
                \n# of Threads:	12
                \nSMP # CPUs:	1
                \nIntegrated Graphics:	UHD Graphics 630\n
                
                \nCache
                \nCache L1:	64 KB (per core)
                \nCache L2:	256 KB (per core)
                \nCache L3:	12 MB (shared)\n",
                'category' => 'CPU',
            ],
            [
                'name'=>'Intel Core i3-10100',
                'photo' => 'images/CPU images/cpu/cpu_img3.png',
                'price' => '5529',
                'details' => "Physical-
                \nSocket:	Intel Socket 1200
                \nFoundry:	Intel
                \nProcess Size:	14 nm
                \nPackage:	FC-LGA1200
                \ntCaseMax:	72°C
                \ntJMax:	100°C\n
                
                \nProcessor-
                \nMarket:	Desktop
                \nProduction Status:	Active
                \nRelease Date:	Apr 30th, 2020
                \nPart#:	SRH3N\n
                
                \nPerformance-
                \nFrequency:	3.6 GHz
                \nTurbo Clock:	up to 4.3 GHz
                \nBase Clock:	100 MHz
                \nMultiplier:	36.0x
                \nMultiplier Unlocked:	No
                \nTDP:	65 W
                \nPL1:	65 W
                \nPL2:	90 W
                \nFP32:	550.4 GFLOPS\n
                
                \nArchitecture-
                \nCodename:	Comet Lake
                \nGeneration:	Core i3 (Comet Lake)
                \nMemory Support:	DDR4
                \nRated Speed:	2666 MT/s
                \nMemory Bus:	Dual-channel
                \nECC Memory:	No
                \nPCI-Express:	Gen 3, 16 Lanes (CPU only)\n
                
                \nCore Config-
                \n# of Cores:	4
                \n# of Threads:	8
                \nSMP # CPUs:	1
                \nIntegrated Graphics:	UHD Graphics 630\n
                
                \nCache-
                \nCache L1:	64 KB (per core)
                \nCache L2:	256 KB (per core)
                \nCache L3:	6 MB (shared)\n",
                'category' => 'CPU',
            ],
            [
                'name'=>'AMD Ryzen 5 5600G',
                'photo' => 'images/CPU images/cpu/cpu_img5.png',
                'price' => '7651',
                'details' => "Physical-
                \nSocket:	AMD Socket AM4
                \nFoundry:	TSMC
                \nProcess Size:	7 nm
                \nTransistors:	10,700 million
                \nDie Size:	180 mm²
                \nPackage:	µOPGA-1331
                \ntCaseMax:	95°C\n
                
                \nPhysical-
                \nSocket:	AMD Socket AM4
                \nFoundry:	TSMC
                \nProcess Size:	7 nm
                \nTransistors:	10,700 million
                \nDie Size:	180 mm²
                \nPackage:	µOPGA-1331
                \ntCaseMax:	95°C\n
                
                \nPerformance-
                \nFrequency:	3.9 GHz
                \nTurbo Clock:	up to 4.4 GHz
                \nBase Clock:	100 MHz
                \nMultiplier:	39.0x
                \nMultiplier Unlocked:	Yes
                \nTDP:	65 W
                \nConfigurable TDP:	45W\n
                
                \nArchitecture-
                \nCodename:	Cezanne
                \nGeneration:	Ryzen 5 (Zen 3 (Cezanne))
                \nMemory Support:	DDR4
                \nRated Speed:	3200 MT/s
                \nMemory Bus:	Dual-channel
                \nECC Memory:	No
                \nPCI-Express:	Gen 3
                \nChipsets:	AMD 300 Series, AMD 400 Series, AMD 500 Series\n
                
                \nCore Config-
                \n# of Cores:	6
                \n# of Threads:	12
                \nSMP # CPUs:	1
                \nIntegrated Graphics:	Radeon Vega 7\n
                
                \nCache-
                \nCache L1:	64 KB (per core)
                \nCache L2:	512 KB (per core)
                \nCache L3:	16 MB\n",
                'category' => 'CPU',
            ],
            [
                'name'=>'Intel Pentium Gold G6500 Processor',
                'photo' => 'images/CPU images/cpu/cpu_img6.png',
                'price' => '7092',
                'details' => "Physical-
                \nSocket:	Intel Socket 1200
                \nFoundry:	Intel
                \nProcess Size:	14 nm
                \nPackage:	FC-LGA1200
                \ntCaseMax:	72°C
                \ntJMax:	100°C\n
                
                \nProcessor
                \nMarket:	Desktop
                \nProduction Status:	Active
                \nRelease Date:	Apr 30th, 2020
                \nPart#:	SRH3Y\n
                
                \nPerformance-
                \nFrequency:	4 GHz
                \nTurbo Clock:	N/A
                \nBase Clock:	100 MHz
                \nMultiplier:	40.0x
                \nMultiplier Unlocked:	No
                \nTDP:	58 W
                \nPL1:	58 W
                \nPL2:	58 W
                \nFP32:	256.0 GFLOPS\n
                
                \nArchitecture-
                \nCodename:	Comet Lake
                \nGeneration:	Pentium Gold (Comet Lake)
                \nMemory Support:	DDR4
                \nRated Speed:	2666 MT/s
                \nMemory Bus:	Dual-channel
                \nECC Memory:	No
                \nPCI-Express:	Gen 3, 16 Lanes (CPU only)\n
                
                \nCache
                \nCache L1:	64 KB (per core)
                \nCache L2:	256 KB (per core)
                \nCache L3:	4 MB (shared)\n
                
                \nCore Config-
                \n# of Cores:	2
                \n# of Threads:	4
                \nSMP # CPUs:	1
                \nIntegrated Graphics:	UHD Graphics 610\n",
                'category' => 'CPU',
            ],
            [
                'name'=>'Intel Core i5-11400',
                'photo' => 'images/CPU images/cpu/cpu_img7.png',
                'price' => '9497',
                'details' => "Physical-
                \nSocket:	Intel Socket 1200
                \nFoundry:	Intel
                \nProcess Size:	14 nm
                \nPackage:	FC-LGA1200
                \ntCaseMax:	72°C
                \ntJMax:	100°C\n
                
                \nProcessor
                \nMarket:	Desktop
                \nProduction Status:	Active
                \nRelease Date:	Apr 30th, 2020
                \nPart#:	SRH3Y and SRH78\n
                
                \nPerformance-
                \nFrequency:	2.9 GHz
                \nTurbo Clock:	up to 4.3 GHz
                \nBase Clock:	100 MHz
                \nMultiplier:	29.0x
                \nMultiplier Unlocked:	No
                \nTDP:	65 W
                \nPL1:	65 W
                \nPL2:	134 W
                \nFP32:	768.0 GFLOPS\n
                
                \nArchitecture-
                \nCodename:	Comet Lake
                \nGeneration:	Core i5
                \n(Comet Lake)
                \nMemory Support:	DDR4
                \nRated Speed:	2666 MT/s
                \nMemory Bus:	Dual-channel
                \nECC Memory:	No
                \nPCI-Express:	Gen 3, 16 Lanes
                \n(CPU only)\n
                
                \nCache
                \nCache L1:	64 KB (per core)
                \nCache L2:	256 KB (per core)
                \nCache L3:	12 MB (shared)\n
                
                \nCore Config-
                \n# of Cores:	6
                \n# of Threads:	12
                \nSMP # CPUs:	1
                \nIntegrated Graphics:	UHD Graphics 630\n",
                'category' => 'CPU',
            ],
            [
                'name'=>'AMD Ryzen 5 3600',
                'photo' => 'images/CPU images/cpu/cpu_img8.png',
                'price' => '4595',
                'details' => "Physical-
                \nSocket:	AMD Socket AM4
                \nFoundry:	TSMC
                \nProcess Size:	7 nm
                \nTransistors:	3,800 million
                \nDie Size:	74 mm²
                \nI/O Process Size:	12 nm
                \nI/O Die Size:	124 mm²
                \nPackage:	µOPGA-1331
                \ntCaseMax:	95°C\n
                
                \nProcessor
                \nMarket:	Desktop
                \nProduction Status:	Active
                \nRelease Date:	Jul 7th, 2019
                \nLaunch Price:	$199
                \nPart#:	100-000000031
                \nBundled Cooler:	Wraith Stealth
                
                \nPerformance-
                \nFrequency:	3.6 GHz
                \nTurbo Clock:	up to 4.2 GHz
                \nBase Clock:	100 MHz
                \nMultiplier:	36.0x
                \nMultiplier Unlocked:	Yes
                \nTDP:	65 W
                \nFP32:	1,209.6 GFLOPS\n
                
                \nArchitecture-
                \nCodename:	Matisse
                \nGeneration:	Ryzen 5 (Zen 2 (Matisse))
                \nMemory Support:	DDR4
                \nRated Speed:	3200 MT/s
                \nMemory Bus:	Dual-channel
                \nECC Memory:	No
                \nPCI-Express:	Gen 4, 16 Lanes
                \n(CPU only)
                \nChipsets:	AMD 300 Series, AMD 400 Series, AMD 500 Series\n
                
                \nCache
                \nCache L1:	64 KB (per core)
                \nCache L2:	512 KB (per core)
                \nCache L3:	32 MB (shared)\n
                
                \nCore Config-
                \n# of Cores:	6
                \n# of Threads:	12
                \nSMP # CPUs:	1
                \nIntegrated Graphics:	N/A",
                'category' => 'CPU',
            ],
            [
                'name'=>'AMD Ryzen 3 3100',
                'photo' => 'images/CPU images/cpu/cpu_img12.png',
                'price' => '3851',
                'details' => "Physical-
                \nSocket:	AMD Socket AM4
                \nFoundry:	TSMC
                \nProcess Size:	7 nm
                \nTransistors:	3,800 million
                \nDie Size:	74 mm²
                \nI/O Process Size:	12 nm
                \nI/O Die Size:	124 mm²
                \nPackage:	µOPGA-1331
                \ntCaseMax:	95°C\n
                
                \nProcessor
                \nMarket:	Desktop
                \nProduction Status:	Active
                \nRelease Date:	Apr 24th, 2020
                \nLaunch Price:	$99
                \nPart#:	100-000000284\n
                
                \nPerformance-
                \nFrequency:	3.6 GHz
                \nTurbo Clock:	up to 3.9 GHz
                \nBase Clock:	100 MHz
                \nMultiplier:	36.0x
                \nMultiplier Unlocked:	Yes
                \nTDP:	65 W
                \nFP32:	748.8 GFLOPS\n
                
                \nArchitecture-
                \nCodename:	Matisse
                \nGeneration:	Ryzen 3 (Zen 2 (Matisse))
                \nMemory Support:	DDR4
                \nRated Speed:	3200 MT/s
                \nMemory Bus:	Dual-channel
                \nECC Memory:	No
                \nPCI-Express:	Gen 4, 16 Lanes
                \n(CPU only)\n
                
                \nCache
                \nCache L1:	64 KB (per core)
                \nCache L2:	512 KB (per core)
                \nCache L3:	16 MB (shared)\n
                
                \nCore Config-
                \n# of Cores:	4
                \n# of Threads:	8
                \nSMP # CPUs:	1
                \nIntegrated Graphics:	N/A",
                'category' => 'CPU',
            ],
            //Case
            [
                'name'=>'Dark Flash DK351 ATX PC Case',
                'photo' => 'images/CASE images/case/darkflashdk351no3.png',
                'price' => '3018',
                'details' => "(Components not included)
                Case Size :390*200*450mm
                Packing Size :490*250*442mm
                Motherboard :ATX / M-ATX / ITX
                HDD / SSD :2 / 2 or 3
                Expansion Slots :7 Slots
                Max. VGA Length :340mm(Max.)
                Max. CPU Height :160mm(Max.)
                Power Supply :Bottom, 175mm
                Radiator System :
                Front : 120/ 240/ 280/ 360mm
                Top : 120/ 240mm
                (Ram height 33.5mm Max.)
                
                Fan Support :
                Front : 120mm*3 /140mm*2
                Top : 120mm*2 /140mm*2
                Rear : 120mm*1
                I/O : USB3.0*2/ HD Audio / Power / Reset
                Left Panel : 4mm Tempered Glass",
                'category' => 'Case',
            ],
            [
                'name'=>'Deepcool Matrexx 55',
                'photo' => 'images/CASE images/case/deepcoolmatrexx55no2.png',
                'price' => '3699',
                'details' => 'Motherboards	E-ATX/ATX/Micro ATX/Mini-ITX
                Case Type	Middle Tower
                Materials	ABS+SPCC+Tempered Glass
                Product Dimensions (L×W×H)	440×210×480mm
                Net Weight	6.97 kg
                Gross Weight	8.01 kg
                5.25" Drive Bays  0
                3.5"/2.5" Drive Bays 2
                2.5" Drive Bays  2+2
                I/O Ports	1×USB3.0/2×USB2.0/1×Audio(HD)/1×Mic,1×RGB Button
                xpansion Slots	7 Slots
                Power Supply Type	ATX PS2 (maximum length: 170mm)
                Cable Management	23mm Clearance
                CPU Cooler Height Limit	165mm
                VGA Length Limit	370mm
                Cooling Fans Support	Pre-installed: None. Optional: Rear: 1×120mm; Front: 3×120mm/ 3×140mm; Top: 2×120mm/ 2×140mm
                Liquid Cooler Support	Front: 120/240/360mm radiator; Top: 120/140/240mm radiator; Rear: 120mm radiator
                Carton Dimension (L×W×H)	523×277×514mm
                EAN	6933412713616
                P/N	DP-ATX-MATREXX55',
                'category' => 'Case',
            ],
            [
                'name'=>'Gigabyte Aorus C300',
                'photo' => 'images/CASE images/case/gigabyteaorusc300no4.png',
                'price' => '7620',
                'details' => 'Case Form Factor
                Mid Tower
                M/B Type
                mini-ITX/m-ATX/ATX
                Color
                Black
                Materials
                Steel, Plastic, Glass
                Dimensions
                H= 469 W= 211 D= 458mm (Within ± 1% error)
                Expansion slots
                7 or 2 (Requires PCIE Riser Cable)
                5.25" Drive Bays
                None
                3.5“/2.5” Drive Bays
                2
                2.5" Drive Bays
                3(Behind the MB tray)
                I/O Panel
                HDMI x1
                USB 3.1 Gen2 Type-C x1
                USB 3.0 x2
                Audio In & Out (Supports AC97 / HD Audio)
                Fan Support
                "Front : 120mm x3 / 140mm x2
                Top : 120mm x2 / 140mm x2
                Rear : 120mm x1
                (Pre-installed: Rear 120mm x 1, Front 120mm x 1)
                Radiator Support
                Front : 360mm / 280mm / 240mm
                Rear : 120mm
                Power Supply Type
                Standard ATX (Not included)
                Maximum Compatibility
                CPU Height : 170mm
                GPU Length : 400mm
                PSU Length : 180mm
                Vertical GPU Mount
                Yes
                Dust Filters
                Top, Front, Bottom
                RGB Lighting
                Yes (Support RGB Fusion 2.0)
                Weight
                N.W. 8 Kg
                Package Dimensions
                H=542 W=309 D=541 mm',
                'category' => 'Case',
            ],
            [
                'name'=>'Tecware Nexus Air TG ATX',
                'photo' => 'images/CASE images/case/tecwarenexusairm2.png',
                'price' => '2525',
                'details' => 'Tecware Nexus Air M2 MATX
                Colors: Black/White
                Brand new
                
                ✔Fans included
                2x Front Fans 
                1x Rear Fan
                
                I/O
                2x USB 3.0
                HD Audio + Mic
                
                BAYS
                2x 3.5”/2.5” (Removable HDD Cage)
                1x 2.5" (Removable Tray)
                4x PCIe Slot Covers
                
                FANS
                Front: 2x 120mm (included) / 2x 140mm
                Rear: 1x 120mm (included)
                Top: 2x 120mm
                
                SUPPORT AND CLEARANCE
                300mm Max GPU Card
                165mm Max CPU Cooler
                Clear Hinged Tempered Glass Panel (Swings Open)
                mATX, ITX
                
                
                SIZE
                Dimensions: L350*W200*H390mm',
                'category' => 'Case',
            ],
            [
                'name'=>'Tecware Vision M Black mATX',
                'photo' => 'images/CASE images/case/tecwarevisionmmatx.png',
                'price' => '3095',
                'details' => 'I/O
                Super speed USB 3.0 x 2
                HD Audio + USB 2.0 x2
                BAYS
                2x 3.5”
                2x 2.5”
                4x PCI Expansion Slots
                FANS
                Front 3x 120mm (included) or 2x 140mm
                Rear 120mm (Included)
                Top 2x120mm / 2x140mm (optional)
                SUPPORT AND CLEARANCE
                Front 240/280mm Radiator support
                Rear 120mm Radiator support
                Top 240/280mm Radiator support
                350mm Max GPU Card
                165mm Max CPU Cooler
                200mm Max PSU length
                Cable Management
                ITX, mATX motherboard
                OTHERS
                Bottom full length mesh filter
                Front & Top magnetic mesh
                5 Rubber grommets
                SIZE
                Dimensions : L 423 W 278.5 H 480mm, 6.85Kg',
                'category' => 'Case',
            ],
            [
                'name'=>'Tecware VXM',
                'photo' => 'images/CASE images/case/vmx2.png',
                'price' => '2700',
                'details' => 'Super Speed USB 3.0 x 2
                HD Audio + Microphone Jack
                2 x 3.5” HDD
                2 x 2.5” SSD
                4 x PCI Expansion Slots
                Rear: 1 x 120mm (included)
                Top: 3 x 120mm
                Bottom: 3 x 120mm
                Side: 2 x 120mm (included)
                400mm Max GPU Length
                160mm Max CPU Cooler Height
                200mm Max PSU Length
                mATX, ITX 
                Top: 120 / 240 / 360mm
                Side: 120 / 240mm
                Rear: 120mm
                Dimensions: L428*W280*H375mm',
                'category' => 'Case',
            ],
        ]);
    }
}
