import React from 'react';

// == Component
import HalfDayCell from '../HalfDayCell/HalfDayCell';

//  == Style 
import PlanningStyled from './PlanningStyled';

const Planning = () => {
  return (
    <PlanningStyled>
      <table className="mobile-version">
          <tbody>
            <tr className="tr-top">
              <td className="cell-left">&nbsp;</td>
              <th>Matin</th>
              <th className="cell-right">Après-midi</th>
            </tr>
            <tr>
              <th>Lundi</th>
              <HalfDayCell city="Sabres" startHour="6 h" endHour="12 h" method="market" />
              <HalfDayCell method="delivery" />
            </tr>
            <tr>
              <th>Mardi</th>
              <HalfDayCell city="Arjuzanx" startHour="8 h" endHour="14 h" method="market" />
              <HalfDayCell city="Boos" startHour="14 h" endHour="17 h" method="market" />
            </tr>
            <tr>
              <th>Mercredi</th>
              <HalfDayCell city="Rion-des-Landes" startHour="7 h" endHour="12 h" method="market" />
              <HalfDayCell city="Tartas" startHour="15 h" endHour="19 h" method="market" />
            </tr>
            <tr>
              <th>Jeudi</th>
              <HalfDayCell method="delivery" />
              <HalfDayCell city="Sabres" startHour="12 h" endHour="16 h" method="market" />
            </tr>
            <tr>
              <th>Vendredi</th>
              <HalfDayCell city="Labouheyre" startHour="6 h" endHour="12 h" method="market" />
              <HalfDayCell city="Sabres" startHour="16 h" endHour="19 h" method="market" />
            </tr>
            <tr>
              <th>Samedi</th>
              <HalfDayCell method="delivery" />
              <HalfDayCell city="Mont-de-Marsan" startHour="13 h" endHour="19 h" method="market" />
            </tr>
            <tr className="tr-down">
              <th className="cell-left">Dimanche</th>
              <HalfDayCell method="delivery" />
              <HalfDayCell city="Castets" startHour="12 h" endHour="16 h" method="market" />
            </tr>
          </tbody>
        </table>
        <table className="desktop-version">
          <tbody>
            <tr className="tr-top">
              <th>Lundi</th>
              <th>Mardi</th>
              <th>Mercredi</th>
              <th>Jeudi</th>
              <th>Vendredi</th>
              <th>Samedi</th>
              <th>Dimanche</th>
            </tr>
            <tr className="part-day">
            <th className="empty-cell"></th>
              <th className="empty-cell"></th>
              <th className="empty-cell"></th>
              <th className="empty-cell">Matin</th>
              <th className="empty-cell"></th>
              <th className="empty-cell"></th>
              <th className="empty-cell"></th>
            </tr>
            <tr>
              <HalfDayCell city="Arjuzanx" startHour="8 h" endHour="14 h" method="market" />
              <HalfDayCell city="Arjuzanx" startHour="8 h" endHour="14 h" method="market" />
              <HalfDayCell city="Rion-des-Landes" startHour="7 h" endHour="12 h" method="market" />
              <HalfDayCell method="delivery" />
              <HalfDayCell city="Labouheyre" startHour="6 h" endHour="12 h" method="market" />
              <HalfDayCell method="delivery" />
              <HalfDayCell method="delivery" />
            </tr>
            <tr className="part-day">
              <th className="empty-cell"></th>
              <th className="empty-cell"></th>
              <th className="empty-cell"></th>
              <th className="empty-cell">Après-midi</th>
              <th className="empty-cell"></th>
              <th className="empty-cell"></th>
              <th className="empty-cell"></th>
            </tr>
            <tr>
              <HalfDayCell method="delivery"/>
              <HalfDayCell city="Boos" startHour="14 h" endHour="17 h" method="market" />
              <HalfDayCell city="Tartas" startHour="15 h" endHour="19 h" method="market" />
              <HalfDayCell city="Sabres" startHour="12 h" endHour="16 h" method="market" />
              <HalfDayCell city="Sabres" startHour="16 h" endHour="19 h" method="market" />
              <HalfDayCell city="Mont-de-Marsan" startHour="13 h" endHour="19 h" method="market" />
              <HalfDayCell city="Castets" startHour="12 h" endHour="16 h" method="market" />
            </tr>
          </tbody>
        </table>
    </PlanningStyled>
  );
};

export default Planning;