<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行には、バリデータクラスが使用するデフォルトのエラーメッセージが
    | 含まれています。サイズルールのように、複数のバージョンを持つルールもあります。
    | ここで各メッセージを自由に調整できます。
    |
    */

    'accepted' => ':attribute を受け入れる必要があります。',
    'accepted_if' => ':other が :value の場合、:attribute を受け入れる必要があります。',
    'active_url' => ':attribute は有効なURLである必要があります。',
    'after' => ':attribute は :date より後の日付である必要があります。',
    'after_or_equal' => ':attribute は :date 以降の日付である必要があります。',
    'alpha' => ':attribute には文字のみを含めることができます。',
    'alpha_dash' => ':attribute には文字、数字、ダッシュ、アンダースコアのみを含めることができます。',
    'alpha_num' => ':attribute には文字と数字のみを含めることができます。',
    'any_of' => ':attribute が無効です。',
    'array' => ':attribute は配列である必要があります。',
    'array_keys' => ':attribute には次のキーのみを含めることができます: :values',
    'ascii' => ':attribute には1バイトの英数字と記号のみを含めることができます。',
    'base64' => ':attribute は有効なBase64文字列である必要があります。',
    'before' => ':attribute は :date より前の日付である必要があります。',
    'before_or_equal' => ':attribute は :date 以前の日付である必要があります。',
    'between' => [
        'array' => ':attribute には :min から :max 個の項目が必要です。',
        'file' => ':attribute は :min から :max キロバイトである必要があります。',
        'numeric' => ':attribute は :min から :max の間である必要があります。',
        'string' => ':attribute は :min から :max 文字である必要があります。',
    ],
    'boolean' => ':attribute は true または false である必要があります。',
    'can' => ':attribute には許可されていない値が含まれています。',
    'confirmed' => ':attribute の確認が一致しません。',
    'contains' => ':attribute に必須の値がありません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attribute は有効な日付である必要があります。',
    'date_equals' => ':attribute は :date と等しい日付である必要があります。',
    'date_format' => ':attribute は形式 :format と一致する必要があります。',
    'decimal' => ':attribute は小数点以下 :decimal 桁である必要があります。',
    'declined' => ':attribute は拒否する必要があります。',
    'declined_if' => ':other が :value の場合、:attribute は拒否する必要があります。',
    'different' => ':attribute と :other は異なる必要があります。',
    'digits' => ':attribute は :digits 桁である必要があります。',
    'digits_between' => ':attribute は :min から :max 桁である必要があります。',
    'dimensions' => ':attribute の画像サイズが無効です。',
    'distinct' => ':attribute に重複した値があります。',
    'doesnt_contain' => ':attribute には次のいずれかを含めることはできません: :values',
    'doesnt_end_with' => ':attribute は次のいずれかで終わることはできません: :values',
    'doesnt_start_with' => ':attribute は次のいずれかで始まることはできません: :values',
    'email' => ':attribute は有効なメールアドレスである必要があります。',
    'encoding' => ':attribute は :encoding でエンコードされている必要があります。',
    'ends_with' => ':attribute は次のいずれかで終わる必要があります: :values',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'extensions' => ':attribute には次の拡張子のいずれかが必要です: :values',
    'file' => ':attribute はファイルである必要があります。',
    'filled' => ':attribute には値が必要です。',
    'gt' => [
        'array' => ':attribute には :value 個より多くの項目が必要です。',
        'file' => ':attribute は :value キロバイトより大きい必要があります。',
        'numeric' => ':attribute は :value より大きい必要があります。',
        'string' => ':attribute は :value 文字より多い必要があります。',
    ],
    'gte' => [
        'array' => ':attribute には :value 個以上の項目が必要です。',
        'file' => ':attribute は :value キロバイト以上である必要があります。',
        'numeric' => ':attribute は :value 以上である必要があります。',
        'string' => ':attribute は :value 文字以上である必要があります。',
    ],
    'hex_color' => ':attribute は有効な16進数カラーである必要があります。',
    'image' => ':attribute は画像である必要があります。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute は :other に存在する必要があります。',
    'in_array_keys' => ':attribute には次のキーの少なくとも1つを含める必要があります: :values',
    'integer' => ':attribute は整数である必要があります。',
    'ip' => ':attribute は有効なIPアドレスである必要があります。',
    'ipv4' => ':attribute は有効なIPv4アドレスである必要があります。',
    'ipv6' => ':attribute は有効なIPv6アドレスである必要があります。',
    'json' => ':attribute は有効なJSON文字列である必要があります。',
    'list' => ':attribute はリストである必要があります。',
    'lowercase' => ':attribute は小文字である必要があります。',
    'lt' => [
        'array' => ':attribute には :value 個未満の項目が必要です。',
        'file' => ':attribute は :value キロバイト未満である必要があります。',
        'numeric' => ':attribute は :value 未満である必要があります。',
        'string' => ':attribute は :value 文字未満である必要があります。',
    ],
    'lte' => [
        'array' => ':attribute には :value 個以下の項目が必要です。',
        'file' => ':attribute は :value キロバイト以下である必要があります。',
        'numeric' => ':attribute は :value 以下である必要があります。',
        'string' => ':attribute は :value 文字以下である必要があります。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスである必要があります。',
    'max' => [
        'array' => ':attribute には :max 個以下の項目が必要です。',
        'file' => ':attribute は :max キロバイト以下である必要があります。',
        'numeric' => ':attribute は :max 以下である必要があります。',
        'string' => ':attribute は :max 文字以下である必要があります。',
    ],
    'max_digits' => ':attribute は :max 桁以下である必要があります。',
    'mimes' => ':attribute は次のタイプのファイルである必要があります: :values',
    'mimetypes' => ':attribute は次のタイプのファイルである必要があります: :values',
    'min' => [
        'array' => ':attribute には少なくとも :min 個の項目が必要です。',
        'file' => ':attribute は少なくとも :min キロバイトである必要があります。',
        'numeric' => ':attribute は少なくとも :min である必要があります。',
        'string' => ':attribute は少なくとも :min 文字である必要があります。',
    ],
    'min_digits' => ':attribute は少なくとも :min 桁である必要があります。',
    'missing' => ':attribute が存在しない必要があります。',
    'missing_if' => ':other が :value の場合、:attribute が存在しない必要があります。',
    'missing_unless' => ':other が :value でない限り、:attribute が存在しない必要があります。',
    'missing_with' => ':values が存在する場合、:attribute が存在しない必要があります。',
    'missing_with_all' => ':values が存在する場合、:attribute が存在しない必要があります。',
    'multiple_of' => ':attribute は :value の倍数である必要があります。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式が無効です。',
    'numeric' => ':attribute は数値である必要があります。',
    'password' => [
        'letters' => ':attribute には少なくとも1つの文字を含める必要があります。',
        'mixed' => ':attribute には少なくとも1つの大文字と1つの小文字を含める必要があります。',
        'numbers' => ':attribute には少なくとも1つの数字を含める必要があります。',
        'symbols' => ':attribute には少なくとも1つの記号を含める必要があります。',
        'uncompromised' => '指定された :attribute はデータ漏洩で発見されました。別の :attribute を選択してください。',
    ],
    'present' => ':attribute が存在する必要があります。',
    'present_if' => ':other が :value の場合、:attribute が存在する必要があります。',
    'present_unless' => ':other が :value でない限り、:attribute が存在する必要があります。',
    'present_with' => ':values が存在する場合、:attribute が存在する必要があります。',
    'present_with_all' => ':values が存在する場合、:attribute が存在する必要があります。',
    'prohibited' => ':attribute は禁止されています。',
    'prohibited_if' => ':other が :value の場合、:attribute は禁止されています。',
    'prohibited_if_accepted' => ':other が受け入れられた場合、:attribute は禁止されています。',
    'prohibited_if_declined' => ':other が拒否された場合、:attribute は禁止されています。',
    'prohibited_unless' => ':other が :values にない限り、:attribute は禁止されています。',
    'prohibits' => ':attribute は :other が存在することを禁止します。',
    'regex' => ':attribute の形式が無効です。',
    'required' => ':attribute は必須です。',
    'required_array_keys' => ':attribute には次のエントリを含める必要があります: :values',
    'required_if' => ':other が :value の場合、:attribute は必須です。',
    'required_if_accepted' => ':other が受け入れられた場合、:attribute は必須です。',
    'required_if_declined' => ':other が拒否された場合、:attribute は必須です。',
    'required_unless' => ':other が :values にない限り、:attribute は必須です。',
    'required_with' => ':values が存在する場合、:attribute は必須です。',
    'required_with_all' => ':values が存在する場合、:attribute は必須です。',
    'required_without' => ':values が存在しない場合、:attribute は必須です。',
    'required_without_all' => ':values のいずれも存在しない場合、:attribute は必須です。',
    'same' => ':attribute は :other と一致する必要があります。',
    'size' => [
        'array' => ':attribute には :size 個の項目が必要です。',
        'file' => ':attribute は :size キロバイトである必要があります。',
        'numeric' => ':attribute は :size である必要があります。',
        'string' => ':attribute は :size 文字である必要があります。',
    ],
    'starts_with' => ':attribute は次のいずれかで始まる必要があります: :values',
    'string' => ':attribute は文字列である必要があります。',
    'timezone' => ':attribute は有効なタイムゾーンである必要があります。',
    'unique' => ':attribute は既に使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字である必要があります。',
    'url' => ':attribute は有効なURLである必要があります。',
    'ulid' => ':attribute は有効なULIDである必要があります。',
    'uuid' => ':attribute は有効なUUIDである必要があります。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | ここでは「attribute.rule」という規約を使用して、属性のカスタム
    | バリデーションメッセージを指定できます。これにより、特定の属性ルールに
    | 対して特定のカスタム言語行をすばやく指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、属性プレースホルダを「email」の代わりに「メールアドレス」
    | のような読みやすいものに置き換えるために使用されます。これは単にメッセージを
    | より表現豊かにするためのものです。
    |
    */

    'attributes' => [],

];
