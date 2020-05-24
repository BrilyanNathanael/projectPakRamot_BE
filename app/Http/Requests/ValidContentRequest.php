use App\Rules\MinWordsRule;
use Illuminate\Foundation\Http\FormRequest;

class ValidContentRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'          => [
                'required',
            ],
            'description' => [
                new ValidContent(),
            ]
        ];
    }
}