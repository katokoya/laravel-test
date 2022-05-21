<style>
    h1 {
        text-align: center;
        padding: 30px;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    .task__add {
        text-align: right;
        padding-bottom: 10px;
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        border-bottom: 1px solid #aaa;
        color: #555;
        width: 100%;
    }

    th {
        border-top: 1px solid #aaa;
        background-color: #f5f5f5;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    td {
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    a {
        margin-right: 20px;
    }
</style>
<h1>タスク詳細</h1>
<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->name }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>作成日時</th>
            <td>{{ $task->created_at->format('Y年m月d日 H:i') }}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{ $task->updated_at->format('Y年m月d日 H:i') }}</td>
        </tr>
    </table>
    <div class="link">
        <div class="link__back">
            <a href="/">戻る</a>
        </div>
        <div class="link__edit">
            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">編集する</a>
        </div>
        <div class="link__delete">
            <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST" name="deleteForm">
                @csrf
                <button type="submit">削除</button>
            </form>
        </div>
    </div>
</div>