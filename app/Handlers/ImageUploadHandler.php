<?php 

namespace App\Handlers;

use Image;

class ImageUploadHandler
{

	protected $allowed_extensions = ['jpg', 'png', 'gif', 'jpeg'];


	public function save($file, $category, $prefix, $max_width = 0)
	{
		
		// 判定ext
		$extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

		if (! in_array($extension, $this->allowed_extensions)) {
			return false;
		}

		// path

		$path = "/upload/images/".
				"$category".
				date('Ym/d', time()). '/';

		// dd($path);

		// filename

		$filename = $prefix . '_' .
					time() . '_' .
					str_random(10) . '.' .
					$extension;


		// dd($filename);

		// 保存
		$file->move(public_path() . $path, $filename);

		// 

		if ($max_width && $extension !== 'gif') {
			$this->reduceSize(public_path() . $path . '/' . $filename, $max_width);
		}


		return [
			'url' => config('app.url') . $path . '/' . $filename,
		];

	}

	public function reduceSize($path, $max_width)
	{
		$image = Image::make($path);

		$image->resize($max_width, null, function($constraint) {

			$constraint->aspectRatio();
			$constraint->upsize();

		});

		$image->save();
	}
}