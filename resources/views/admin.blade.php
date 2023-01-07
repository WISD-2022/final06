<x-app-layout>


    <div style="background-color: blue">

        <h1>Admin Dashboard</h1>

    </div>

    <div>

    <form action="{{url('/addstudent')}}" method="post">
        @csrf
        <div>
            <div>
                <label>帳號</label>
                <input type="text" name="student_id" required="">
            </div> <br>
            <div>
                <label>密碼</label>
                <input type="text" name="number" required="">
            </div>
            <br>
            <div>
                <input type="submit" value="登入">
            </div>
        </div>
    </form>

    </div>
</x-app-layout>



