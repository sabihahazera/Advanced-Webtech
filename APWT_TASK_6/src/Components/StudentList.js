import React, { useState } from 'react';
import StudentDb from './StudentDb';

function StudentList(props) {
    const data = [{ name: 'SABIHA HAZERA NATASHA', id: '19-39671-1', cgpa: '3.6' }, { name: 'MR X', id: '19-12345-1', cgpa: '3.93' },{ name: 'MR Y', id: '19-45677-1', cgpa: '4' }, ]
    const [studentdb] = useState(data)
    return (
         <div > {
                studentdb.map(student => < StudentDb students = { student }
                    />)} 
                    </div >
                )
            }

            export default StudentList;