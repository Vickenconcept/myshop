<input {{ $attributes->merge([
            'type' => 'file',
            'class' => 'dropify',
            'data-allowed-file-extensions' => 'png jpg jpeg',
            'data-max-file-size' => '2M'
         ])
      }} />
